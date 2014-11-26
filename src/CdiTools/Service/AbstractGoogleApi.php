<?php

namespace CdiTools\Service;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GoogleApi
 *
 * @author cincarnato
 */
abstract class AbstractGoogleApi {

    //put your code here

    protected $apiId;
    protected $apiEmail;
    protected $apiKeyFile;
    protected $apiApplicationName;
    protected $apiAccessType = 'offline_access';
    protected $client;

    function __construct(AuthenticationOptionsInterface $options) {

        $this->apiId = $options->getApiId();
        $this->apiEmail = $options->getApiEmail();
        $this->apiKeyFile = $options->getApiKeyFile();
        $this->apiApplicationName = $options->getApiApplicationName();

        var_dump( $this->apiId);
        
        //$this->client = new \Google_Client();
    }

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

    public function getClient() {
        return $this->client;
    }

    public function setClient($client) {
        $this->client = $client;
    }

}

?>
