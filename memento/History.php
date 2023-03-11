<?php

// Caretaker
class History {
    private $states = [];

    public function push(EditorState $editorState)
    {
        array_push($this->states, $editorState);
    }

    public function pop()
    {
        $lastIndex = count($this->states) - 1;
        $lastState = $this->states[$lastIndex];
        array_pop($this->states);
        return $lastState;
    }

    public function getStates()
    {
        return $this->states;
    }
}