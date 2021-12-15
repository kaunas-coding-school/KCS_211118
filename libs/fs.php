<?php

function skaitytiFaila(string $filePath, string $option = 'r')
{
    return fopen($filePath, $option);
}

function spausdintiFaila($manofailas, $kiek): void
{
    echo fread($manofailas, $kiek);
    fclose($manofailas);
}

function redaguotiFaila($failas, $duomenys): void
{
    fwrite($failas, $duomenys);
}