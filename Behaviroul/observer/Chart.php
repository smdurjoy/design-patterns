<?php

class Chart implements Observer
{
    private DataSource $dataSource;

    public function __construct(DataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function update()
    {
        echo "Chart updated: ".$this->dataSource->getValue().PHP_EOL;
    }
}