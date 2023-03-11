<?php

class Canvas
{
    private Tool $currentTool;

    public function setCurrentTool(Tool $tool)
    {
        $this->currentTool = $tool;
    }

    public function getCurrentTool(): Tool
    {
        return $this->currentTool;
    }

    public function mouseUp()
    {
        $this->currentTool->mouseUp();
    }

    public function mouseDown()
    {
        $this->currentTool->mouseDown();
    }
}