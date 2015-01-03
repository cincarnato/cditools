<?php

namespace CdiTools\Service\Factory;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of GoogleApiAnalyticsFactory
 *
 * @author cincarnato
 */
class FacebookAppRequestFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $options = $serviceLocator->get('cditools_facebook_app_options');
        $FacebookAppRequest = new \CdiTools\Service\FacebookAppRequest($options);
       
        return $FacebookAppRequest;
    }

}

?>
