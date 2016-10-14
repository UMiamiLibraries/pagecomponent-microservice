<?php

/**
 * Created by PhpStorm.
 * User: cbrownroberts
 * Date: 10/13/16
 * Time: 12:21 PM
 */
class Writer
{
    public function __construct() {
    }


    public function getJson() {
        $url = "assets/data/components.json";
        $json = file_get_contents($url);
        $jsonArray = json_decode($json, true);
        return $jsonArray;
    }

    public function write($source, $destination) {

        if(file_exists($source)) {

            $data = file_get_contents($source);

            if (!file_exists($destination)) {
                touch($destination);
            }

            file_put_contents($destination, $data);
        }

    }

    public function writeComponents() {

        $array = $this->getJson();
        foreach($array as $component):
            $src = $component['src'];
            $dist = $component['dist'];
            $filename = $component['filename'];

            $source      = $src . '/' . $filename;
            $destination = $dist . '/' . $filename;

            $this->write($source, $destination);
        endforeach;

    }
}

