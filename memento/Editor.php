<?php

class Editor {
    private string $content;

    public function setContent(string $content): Editor
    {
        $this->content = $content;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}