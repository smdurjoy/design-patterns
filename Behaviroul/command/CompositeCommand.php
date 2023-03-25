<?php

class CompositeCommand implements Command
{
    private $commands = [];

    public function add(Command $command)
    {
        $this->commands[]= $command;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}