<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Patterns;

class Singleton
{
    private $settings = ['nick' => 'Blue',
        'lvl' => '29'];

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getSetting($key)
    {
        return $this->settings[$key];
    }
}
