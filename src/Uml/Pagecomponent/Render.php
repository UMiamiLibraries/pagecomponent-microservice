<?php

/**
 * Created by PhpStorm.
 * User: cbrownroberts
 * Date: 10/13/16
 * Time: 12:21 PM
 */


class Render
{

    public $cdn_url;

    public function __construct() {

    }


    public function render($cdn_url, $component){
        $URL = $cdn_url . $component;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $URL);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }


}