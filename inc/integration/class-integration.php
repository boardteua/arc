<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace loyalty\Inc\Integration;

use loyalty\Inc\Libraries;

/**
 * Description of class-integration
 *
 * @author hymera
 */
class Integration {

    protected $api_url;
    protected $token;
    public $curl;
    public $frontend;
    
        

    public function __construct($key) {
        $this->api_url = 'http://redpanda.ml/bridge/bridge.php';
        $this->token = md5($key);
        $this->curl = new \loyalty\Inc\Libraries\curl();
        
    }
    

    public function make_get($prm) {    
        if (!$prm) {
            return array('success' => false, 'error' => 'empty');
        }
        
                
        $prm['key'] = $this->token;
        
        try {
            $response = $this->curl->get($this->api_url, $prm);
            
            if ($response) {
                $response = json_decode($response->text());
            }
            
            if ($response == NULL || $response->success == false) {
                return array('success' => false);
            }
        } catch (exeption $e) {
            return array('success' => false, 'error' => $e);
        }

        return array('success' => true, 'response' => $response->out);
    }

}
