<?php

include "Tool.php";

class BrushTool implements Tool
{
    public function mouseUp()
    {
        echo "Brush tool \n";
    }

    public function mouseDown()
    {
        echo "Listening brush event";
    }
}