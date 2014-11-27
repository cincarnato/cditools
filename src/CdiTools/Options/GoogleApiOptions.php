<?php

namespace CdiTools\Options;

use Zend\Stdlib\AbstractOptions;

class GoogleApiOptions extends AbstractOptions implements
GoogleApiOptionsInterface {

    protected $apiId;
    protected $apiEmail;
    protected $apiKeyFile;
    protected $apiApplicationName;
    protected $apiScopes = array();
    protected $apiPrivateKeyPassword;
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
    
    public function getApiScopes() {
        return $this->apiScopes;
    }

    public function setApiScopes(Array $apiScopes) {
        $this->apiScopes = $apiScopes;
    } 

    public function getApiPrivateKeyPassword() {
        return $this->apiPrivateKeyPassword;
    }

    public function setApiPrivateKeyPassword($apiPrivateKeyPassword) {
        $this->apiPrivateKeyPassword = $apiPrivateKeyPassword;
    }



}
