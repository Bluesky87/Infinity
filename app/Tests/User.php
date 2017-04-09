<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

class User
{
    const MIN_PASS_LENGTH = 4;

    private $user = array();

    public function __construct(array $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPassword($password)
    {
        if (strlen($password) < self::MIN_PASS_LENGTH) {
            return false;
        }

        $this->user['password'] = $this->cryptPassword($password);

        return true;
    }

    private function cryptPassword($password)
    {
        return md5($password);
    }
}

/*$user = new User(array('password'=>'fubar'));
$reflection = new \ReflectionClass(get_class($user));
$method = $reflection->getMethod('cryptPassword');
$method->setAccessible(true);
var_dump($method->invokeArgs($user, array('fubar')));*/
