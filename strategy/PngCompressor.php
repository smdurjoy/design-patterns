<?php

include "Compressor.php";

class PngCompressor implements Compressor
{
    public function compress(string $file): void
    {
        echo "Compressing using PNG compressor".PHP_EOL;
    }
}