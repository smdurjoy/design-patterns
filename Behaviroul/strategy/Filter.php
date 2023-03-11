<?php

interface Filter
{
    public function filter(string $file): void;
}