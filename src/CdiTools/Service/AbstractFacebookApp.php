<?php

namespace CdiTools\Service;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use CdiTools\Options\FacebookAppOptionsInterface;

/**
 * Description of GoogleApi
 *
 * @author cincarnato
 */
abstract class AbstractFacebookApp {

    //put your code here

    protected $appId;
    protected $appSecret;
    protected $redirectLoginHelper;
    protected $urlRedirect;
    protected $scopes;
    protected $session;
    protected $accessToken;

    function __construct(FacebookAppOptionsInterface $options) {

        $this->appId = $options->getAppId();
        $this->appSecret = $options->getAppSecret();
        $this->processDefaultApplication();
    }

    public function processDefaultApplication() {
        \Facebook\FacebookSession::setDefaultApplication($this->appId, $this->appSecret);
    }

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

    public function generateRedirectLoginHelper($urlRedirect) {

        if (!$this->redirectLoginHelper) {
            $this->redirectLoginHelper = new \Facebook\FacebookRedirectLoginHelper($urlRedirect);
        }

        return $this->redirectLoginHelper;
    }

    public function setScopes(array $scopes) {
        $this->scopes = $scopes;
    }

    public function getLoginUrl() {
        if ($this->redirectLoginHelper && $this->scopes) {
            return $this->redirectLoginHelper->getLoginUrl($this->scopes);
        } else {
            throw new \Exception("Must be define Scopes and Generate redirectLoginHelper");
        }
    }

    public function getLongLivedToken() {
        $this->accessToken = $this->session->getLongLivedSession(); //long-live access_token 60 days
        return $this->accessToken;
    }

    public function getSession($token = null) {

        try {

            if ($token) {
                $this->session = new \Facebook\FacebookSession($token);
            } else {

                if (!$this->session) {
                    $this->session = $this->redirectLoginHelper->getSessionFromRedirect();
                }
            }
            return $this->session;
        } catch (\Facebook\FacebookRequestException $ex) {
            // When Facebook returns an error
            return false;
        } catch (\Exception $ex) {
            // When validation fails or other local issues
            return false;
        }
    }

}

?>
