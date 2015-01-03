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
class FacebookAppRequest extends AbstractFacebookApp {


    protected $requestNameFilter;
     protected $targetId;
    /**
     * 
     * #page_fan_adds_unique
     * The number of new people who have liked your Page (Unique Users)
     * 
     * #page_fan_adds
     * The number of new people who have liked your Page (Total Count)
     * 
     * #page_fan_removes_unique
     * The number of Unlikes of your Page (Unique Users)
     * 
     * #page_fan_removes
     * The number of Unlikes of your Page (Total Count)
     */
 

   

    public function useFacebookRequestByRangeDate($startDate, $endDate, $targetId, $requestNameFilter) {

        $this->requestNameFilter = $requestNameFilter;
        $this->targetId = $targetId;
        
        if ($this->session) {
            $string = $this->generateRequestStringByRangeDate($startDate, $endDate);
            $request = new \Facebook\FacebookRequest(
                    $this->session, 'GET', $string
            );
            
            
            
            $response = $request->execute();
            $graphObject = $response->getGraphObject();
            return $graphObject;
        }
    }

    public function generateRequestStringByRangeDate($startDate, $endDate) {
        $string = "/";
        $string .= $this->targetId;
        $string .= "/insights";
        $string .= "/";
        $string .= $this->requestNameFilter;
        $string .= "?since=" . $startDate . "&until=" . $endDate;
        return $string;
    }

}

?>
