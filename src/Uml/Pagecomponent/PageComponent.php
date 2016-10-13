<?php

/**
 * Created by PhpStorm.
 * User: cbrownroberts
 * Date: 10/13/16
 * Time: 12:11 PM
 */

require_once __DIR__ .'/vendor/mustache/mustache/src/Mustache/Autoloader.php';

class PageComponent
{

    public $mustache;

    public function __construct() {
        Mustache_Autoloader::register();
        $this->mustache = $this->loadMustache();
    }


    protected function loadMustache() {

        $options =  array('extension' => '.html');

        $mustache = new Mustache_Engine(array(
            'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/assets/views/src', $options),
            /*
           'template_class_prefix' => '__MyTemplates_',
           'cache' => dirname(__FILE__).'/../../../tmp/cache/mustache',
           'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
           'cache_lambda_templates' => true,
           'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../views'),
           'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../views/partials'),

           'helpers' => array('i18n' => function($text) {
               // do something translatey here...
           }),
           'escape' => function($value) {
               return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
           },
           'charset' => 'ISO-8859-1',
           'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
           'strict_callables' => true,
           'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
            */

        ));

        return $mustache;
    }


    public function loadComponent($template, $data = array()) {
        $tpl = $this->mustache->loadTemplate($template);
        return $tpl->render();
    }
}