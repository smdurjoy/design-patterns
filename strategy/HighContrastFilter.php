<?php

include "Filter.php";

class HighContrastFilter implements Filter
{
    public function filter(string $file): void
    {
        echo "Filtering using High Contrast filter";
    }
}