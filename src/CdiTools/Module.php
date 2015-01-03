<?php

namespace CdiTools;

class Module {

    public function getConfig() {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/../../src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function onBootstrap(\Zend\Mvc\MvcEvent $mvcEvent) {
        
    }

    public function getServiceConfig() {
        return array(
            'invokables' => array(
                'cditool_googleapi_service' => 'CdiTools\Service\GoogleApi',
            ),
            'factories' => array(
                'cditools_google_api_options' => function ($sm) {
                    $config = $sm->get('Config');
                    return new Options\GoogleApiOptions(isset($config['CdiToolsGoogleAPI']) ? $config['CdiToolsGoogleAPI'] : array());
                },
                'cditools_google_api_analytics' => 'CdiTools\Service\Factory\GoogleApiAnalyticsFactory',
                'cditools_facebook_app_options' => function ($sm) {
                    $config = $sm->get('Config');
                    return new Options\FacebookAppOptions(isset($config['CdiToolsFacebookApp']) ? $config['CdiToolsFacebookApp'] : array());
                },
                'cditools_facebook_app_request' => 'CdiTools\Service\Factory\FacebookAppRequestFactory',
            ),
        );
    }

}