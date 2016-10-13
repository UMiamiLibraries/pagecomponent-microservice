<?php
/**
 * Created by PhpStorm.
 * User: cbrownroberts
 * Date: 10/13/16
 * Time: 3:16 PM
 */

require_once __DIR__ . '/../PageComponent.php';
require_once __DIR__ . '/../models/SocialMedia.php';

$objPageComponent = new PageComponent();



//create social media
$objSocialMedia = new SocialMedia;
$objSocialMedia->setTwitter("https://twitter.com/UMiamiLibraries");

$sm = $objPageComponent->loadComponent('socialmedia.html', $objSocialMedia);
echo $sm;