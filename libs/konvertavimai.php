<?php

include 'libs/konvert.php';

function konvertuoti(int|float $ka, string $kaip): float
{
    switch ($kaip) {
        case 'mylios':
            $ats = myles2km($ka);
            break;
        case 'kilometrai':
            $ats = km2myles($ka);
            break;
        default;
            throw new Exception('Nesuprantamas formatas');
    }

    return $ats;
}