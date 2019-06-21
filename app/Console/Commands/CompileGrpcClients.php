<?php

namespace Octopus\Console\Commands;

use Illuminate\Console\Command;

class CompileGrpcClients extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'compile:grpc-client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Compiles and generates the Clients for the Protocol Buffer gRPC calls';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Generating the proto compiler Command..');

        $baseDirPath = base_path();
        $phpOutPath = "$baseDirPath";
        $protoPath = config('app.proto_base_dir');
        $grpcPhpPluginPath = config('app.grpc_php_plugin_dir') . '/grpc_php_plugin';

        $command = [
            'protoc',
            "--proto_path=$protoPath",
            "--php_out=$phpOutPath",
            "--grpc_out=$phpOutPath",
            "--plugin=protoc-gen-grpc=$grpcPhpPluginPath"
        ];

        $files = glob($protoPath . '/*.proto');
        foreach ($files as $file) {
            $commandForFile = implode(' ', array_merge($command, [$file]));
            $this->info("Executing the Command.. $commandForFile");
            shell_exec($commandForFile);
        }

        $this->info('Compiled!');
    }
}
