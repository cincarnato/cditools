<?php

namespace CdiTools\Options;

use Zend\Stdlib\AbstractOptions;

class FacebookAppOptions extends AbstractOptions implements
FacebookAppOptionsInterface {

    protected $appId;
    protected $appSecret;

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

    public function getAppSecret() {
        return $this->appSecret;
    }

    public function setAppSecret($appSecret) {
        $this->appSecret = $appSecret;
    }

}
