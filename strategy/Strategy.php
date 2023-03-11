<?php

include "ImageStorage.php";
include "JpegCompressor.php";
include "PngCompressor.php";
include "BlackAndWhiteFilter.php";
include "HighContrastFilter.php";

class Strategy
{
    public function action()
    {
        $imageStorage = new ImageStorage();
        $imageStorage->store(
            'a.jpg', new JpegCompressor(), new BlackAndWhiteFilter()
        );
        $imageStorage->store(
            'b.png', new PngCompressor(), new HighContrastFilter()
        );
    }
}

(new Strategy())->action();