<?php

class UIControl
{
    protected DailogBox $owner;

    public function __construct(DailogBox $owner)
    {
        $this->owner = $owner;
    }
}