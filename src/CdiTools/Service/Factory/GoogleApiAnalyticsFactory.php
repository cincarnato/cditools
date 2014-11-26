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
class GoogleApiAnalyticsFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $options = $sm->get('cditools_google_api_options');
        $GoogleApiAnalytics = new \CdiTools\Service\GoogleApiAnalytics($options);
        return $GoogleApiAnalytics;
    }

}

?>
