<?php

const KM2MYLES = 0.621371;

function km2myles(int|float $ka): float
{
    return $ka * KM2MYLES;
}

function myles2km(int|float $ka): float
{
    return $ka / KM2MYLES;
}

