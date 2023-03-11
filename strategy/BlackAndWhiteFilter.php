<?php

include "Filter.php";

class BlackAndWhiteFilter implements Filter
{
    public function filter(string $file): void
    {
        echo "Filtering using B&W filter";
    }
}