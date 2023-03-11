<?php

include "Tool.php";

class EraseTool implements Tool
{
    public function mouseUp()
    {
        echo "Erase tool \n";
    }

    public function mouseDown()
    {
        echo "Listening erase event";
    }
}