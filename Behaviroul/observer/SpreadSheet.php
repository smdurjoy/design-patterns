<?php

include "Observer.php";

class SpreadSheet implements Observer
{
    private DataSource $dataSource;

    public function __construct(DataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function update()
    {
        echo "Spreadsheet updated: ".$this->dataSource->getValue().PHP_EOL;
    }
}