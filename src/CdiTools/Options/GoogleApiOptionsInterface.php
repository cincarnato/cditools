<?php

namespace CdiTools\Options;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author cincarnato
 */
interface GoogleApiOptionsInterface {

    public function setApiId($apiId);

    public function getApiId();

    public function setApiEmail($apiEmail);

    public function getApiEmail();

    public function getApiKeyFile();

    public function setApiKeyFile($apiKeyFile);

    public function getApiApplicationName();

    public function setApiApplicationName($apiApplicationName);

    public function getApiAccessType();

    public function setApiAccessType($apiAccessType);
    
    
     public function getApiScopes();

    public function setApiScopes(Array $apiScopes);

    public function getApiPrivateKeyPassword();

    public function setApiPrivateKeyPassword($apiPrivateKeyPassword);
}

?>
