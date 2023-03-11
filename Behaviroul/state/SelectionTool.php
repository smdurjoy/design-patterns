<?php

include "Tool.php";

class SelectionTool implements Tool
{
    public function mouseUp()
    {
        echo "Selection tool \n";
    }

    public function mouseDown()
    {
        echo "Listening selection event";
    }
}