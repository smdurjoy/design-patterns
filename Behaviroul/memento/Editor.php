<?php

include "EditorState.php";

// Originator
class Editor {
    private string $content;

    public function createState(): EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $editorState)
    {
        $this->content = $editorState->getContent();
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}