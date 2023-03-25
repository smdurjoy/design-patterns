<?php

class HtmlDocument
{
    private String $content;

    public function setContent(String $content): HtmlDocument
    {
        $this->content = $content;
        return $this;
    }

    public function getContent(): String
    {
        return $this->content;
    }

    public function makeBold()
    {
        $this->content = "<b>$this->content</b>";
    }
}