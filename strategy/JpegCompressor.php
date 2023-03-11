<?php

include "Compressor.php";

class JpegCompressor implements Compressor
{
    public function compress(string $file): void
    {
        echo "Compressing using JPEG compressor".PHP_EOL;
    }
}