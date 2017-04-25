<?php

namespace Infinity\Patterns\Observer;

/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */
class Observer1 implements \SplObserver
{
    private $addUsers = [];

    public function update(\SplSubject $subject)
    {
        $this->addUsers[] = clone $subject;
        echo 'Wysłałem maila z informacją o zapisaniu się do newsletter.';
    }

    /**
     * @return array
     */
    public function getAddUsers()
    {
        return $this->addUsers;
    }
}
