<?php

include "Subject.php";

class DataSource extends Subject
{
    private int $value;

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
        $this->notifyObservers();
    }
}