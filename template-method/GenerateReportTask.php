<?php

include "Task.php";

class GenerateReportTask extends Task
{
    protected function doExecute()
    {
        echo "Report Generated.";
    }    
}