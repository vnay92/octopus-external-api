<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

/**
 */
class HealthServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function IsActive(\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/HealthService/IsActive',
        $argument,
        ['\HealthResponse', 'decode'],
        $metadata, $options);
    }

}
