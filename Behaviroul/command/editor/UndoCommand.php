<?php

class UndoCommand implements Command
{
    private History $history;

    public function __construct(History $history)
    {
        $this->history = $history;
    }

    public function execute()
    {
        if ($this->history->size()) {
            $this->history->pop()->unexecute();
        }
    }
}