<?php

class history
{
    private $commands = [];

    public function add(UndoableCommand $command)
    {
        $this->commands[]= $command;
    }

    public function pop(): UndoableCommand
    {
        $lastIdx = $this->size() - 1;
        $lastItem = $this->commands[$lastIdx];
        array_pop($this->commands);
        return $lastItem;
    }

    public function size(): int
    {
        return count($this->commands);
    }
}