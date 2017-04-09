<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 31.03.2017
 * Time: 18:34
 */

namespace Infinity\Test;

use Infinity\Tests\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testSetPasswordReturnsTrueWhenPasswordSuccessfullySet()
    {
        $details = array();

        $user = new User($details);

        $password = 'fubar';

        $result = $user->setPassword($password);

        $this->assertTrue($result);
    }

    public function testGetUserReturnsUserWithExpectedValues()
    {
        $details = array();

        $user = new User($details);

        $password = 'fubar';

        $user->setPassword($password);

        $expectedPasswordResult = '5185e8b8fd8a71fc80545e144f91faf2';

        $currentUser = $user->getUser();

        $this->assertEquals($expectedPasswordResult, $currentUser['password']);
    }
}
