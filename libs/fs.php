<?php

function skaitytiFaila(string $filePath): string
{
    $failoDydis = filesize($filePath);
    $failas = fopen($filePath, 'r');
    $failoTurinys = fread($failas, $failoDydis);
    fclose($failas);

    return $failoTurinys;
}

function saugotiIfaila(string $filePath, $duomenys): void
{
    $failas = fopen($filePath, 'w+');
    fwrite($failas, $duomenys);
    fclose($failas);
}