<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 02.03.2017
 * Time: 21:43
 */

class Singleton {

    private $settings = ['user' => 'Blue',
        'pass' => 'password'];

    private static $instance;

    private function __construct() {}

    public static function getInstance() {
        if(empty(self::$instance)){
            self::$instance = new Singleton();
            var_dump('generate instance');
        }
        return self::$instance;
    }

    public function getSetting($key){
        return $this->settings[$key];
    }

}



var_dump(Singleton::getInstance(),Singleton::getInstance(), Singleton::getInstance());
