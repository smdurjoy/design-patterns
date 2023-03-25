<?php

abstract class Subject
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[]= $observer;
    }

    public function removeObserver(Observer $observer)
    {
        if (($key = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}