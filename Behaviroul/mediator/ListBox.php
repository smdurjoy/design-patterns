<?php

class ListBox extends UIControl
{
    private string $selection;

    public function __construct(DailogBox $owner)
    {
        parent::__construct($owner);
    }

    public function getSelection(): string
    {
        return $this->selection;
    }

    public function setSelection(string $selection)
    {
        $this->selection = $selection;
        $this->owner->changed($this);
    }
}