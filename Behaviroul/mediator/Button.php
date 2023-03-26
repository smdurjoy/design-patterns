<?php

class Button extends UIControl
{
    private bool $isEnabled;

    public function __construct(DailogBox $owner)
    {
        parent::__construct($owner);
    }

    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function setEnabled(bool $enabled)
    {
        $this->isEnabled = $enabled;
        $this->owner->changed($this);
    }
}