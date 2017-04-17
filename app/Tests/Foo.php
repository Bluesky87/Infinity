<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

class Foo implements \JsonSerializable
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function jsonSerialize()
    {
        return [
            'foo' => [
                'name' => $this->name,
                'email' => $this->email
            ]
        ];
    }
}

$foo = new Foo('test', 'mail@gmail.com');

var_dump(json_encode($foo));
