<?php

/**
 * Created by PhpStorm.
 * User: cbrownroberts
 * Date: 10/13/16
 * Time: 3:36 PM
 */
class SocialMedia
{

    public $twitter;
    public $facebook;
    public $instagram;
    public $flickr;

    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function getTwitter() {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getFacebook() {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook) {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getInstagram() {
        return $this->instagram;
    }

    /**
     * @param mixed $instagram
     */
    public function setInstagram($instagram) {
        $this->instagram = $instagram;
    }

    /**
     * @return mixed
     */
    public function getFlickr() {
        return $this->flickr;
    }

    /**
     * @param mixed $flickr
     */
    public function setFlickr($flickr) {
        $this->flickr = $flickr;
    }





}