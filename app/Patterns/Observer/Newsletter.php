<?php

/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Patterns\Observer;

class Newsletter implements \SplSubject
{
    private $observers = [];

    public function attach(\SplObserver $observer)
    {
        $this->observers[spl_object_hash($observer)] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        unset($this->observers[spl_object_hash($observer)]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function register($data)
    {
        //echo 'Rejestruje wysłanie maila i zmieniam status na wysłany.';
        $this->notify();
    }
}
