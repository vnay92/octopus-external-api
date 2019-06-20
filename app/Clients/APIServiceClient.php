<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

/**
 */
class APIServiceClient extends \Grpc\BaseStub {

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
    public function ListNotes(\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/APIService/ListNotes',
        $argument,
        ['\NoteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \NoteRequestId $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNoteById(\NoteRequestId $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/APIService/GetNoteById',
        $argument,
        ['\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Note $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateNote(\Note $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/APIService/CreateNote',
        $argument,
        ['\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Note $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateNote(\Note $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/APIService/UpdateNote',
        $argument,
        ['\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \NoteRequestId $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteNoteById(\NoteRequestId $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/APIService/DeleteNoteById',
        $argument,
        ['\PBEmpty', 'decode'],
        $metadata, $options);
    }

}
