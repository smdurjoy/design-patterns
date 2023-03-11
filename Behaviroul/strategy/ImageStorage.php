<?php

class ImageStorage
{
    public function store(
        string $image, 
        Compressor $compressor, 
        Filter $filter
    ) {
        $compressor->compress($image);
        $filter->filter($image);
    }
}