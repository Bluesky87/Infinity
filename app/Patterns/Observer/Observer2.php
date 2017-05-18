<?php

namespace Infinity\Patterns\Observer;

/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */
class Observer2 implements \SplObserver
{
    private $addUsers = [];

    public function update(\SplSubject $subject)
    {
        $this->addUsers[] = clone $subject;
        // echo 'Wysyłam smsa';
    }

    /**
     * @return array
     */
    public function getAddUsers()
    {
        return $this->addUsers;
    }
}
