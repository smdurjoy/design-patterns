<?php

include "TransferMoneyTask.php";
// include "GenerateReportTask.php";

class Main
{
    public function main()
    {
        $task = new TransferMoneyTask();
        $task->execute();

        // $task = new GenerateReportTask();
        // $task->execute();
    }
}

(new Main())->main();