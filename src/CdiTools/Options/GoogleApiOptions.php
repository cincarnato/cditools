<?php

namespace CdiTools\Options;

use Zend\Stdlib\AbstractOptions;

class GoogleApiOptions extends AbstractOptions implements
OptionsInterface {

    protected $apiId;
    protected $apiEmail;
    protected $apiKeyFile;
    protected $apiApplicationName;
    protected $apiAccessType = 'offline_access';

    public function getApiId() {
        return $this->apiId;
    }

    public function setApiId($apiId) {
        $this->apiId = $apiId;
    }

    public function getApiEmail() {
        return $this->apiEmail;
    }

    public function setApiEmail($apiEmail) {
        $this->apiEmail = $apiEmail;
    }

    public function getApiKeyFile() {
        return $this->apiKeyFile;
    }

    public function setApiKeyFile($apiKeyFile) {
        $this->apiKeyFile = $apiKeyFile;
    }

    public function getApiApplicationName() {
        return $this->apiApplicationName;
    }

    public function setApiApplicationName($apiApplicationName) {
        $this->apiApplicationName = $apiApplicationName;
    }

    public function getApiAccessType() {
        return $this->apiAccessType;
    }

    public function setApiAccessType($apiAccessType) {
        $this->apiAccessType = $apiAccessType;
    }






}
