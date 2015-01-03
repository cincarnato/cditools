<?php

namespace CdiTools\Service;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GoogleApiAnalytics
 *
 * @author cincarnato
 */
class GoogleApiAnalytics extends AbstractGoogleApi {

    protected $gaAccount;

    public function initService() {
        $this->service = new \Google_Service_Analytics($this->client);
    }

    public function useServiceDataGa($gaAccount, $startDate, $endDate, $items) {
        $results = $this->service->data_ga->get($gaAccount, $startDate, $endDate, $items);
   
        return $results;
    }

}

?>
