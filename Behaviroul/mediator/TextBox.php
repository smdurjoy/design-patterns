<?php

class TextBox extends UIControl
{
    private string $content;

    public function __construct(DailogBox $owner)
    {
        parent::__construct($owner);
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
        $this->owner->changed($this);
    }
}