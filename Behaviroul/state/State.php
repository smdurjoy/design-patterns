<?php

include "Canvas.php";
include "EraseTool.php";

class State
{
    public function action()
    {
        $canvas = new Canvas();
        // $canvas->setCurrentTool(new SelectionTool());
        // $canvas->setCurrentTool(new BrushTool());
        $canvas->setCurrentTool(new EraseTool());
        $canvas->mouseUp();
        $canvas->mouseDown();
    }
}

(new State())->action();