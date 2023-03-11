<?php

interface Compressor
{
    public function compress(string $file): void;
}