<?php

include "DataSource.php";
include "SpreadSheet.php";
include "Chart.php";

class Main 
{
    public function action()
    {
        $dataSource = new DataSource();
        $sheet1 = new SpreadSheet($dataSource);
        $sheet2 = new SpreadSheet($dataSource);
        $chart = new Chart($dataSource);

        $dataSource->addObserver($sheet1);
        $dataSource->addObserver($sheet2);
        $dataSource->addObserver($chart);
            
        $dataSource->setValue(1);
        $dataSource->setValue(2);
    }
}

(new Main())->action();