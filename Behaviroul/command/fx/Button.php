<?php

class Button
{
    private String $label;
    private Command $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function click()
    {
        $this->command->execute();
    }

    public function setLabel(String $label): Button
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): String
    {
        return $this->label;
    }
}