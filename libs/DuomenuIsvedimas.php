<?php

function spausdintiTeksta(string|int|float $txt): void
{
    echo $txt;
}

function spausdintiHtml(array $array, string $id = ''): void
{
    echo "<table id='$id'>";
    foreach ($array as $key => $item) {
        echo "<tr><td>$key</td><td>$item</td></tr>";
    }
    echo "</table>";
}

function spausdintiLenteleTxt(array $array): void
{
    foreach ($array as $key => $item) {
        echo "$key - $item\n";
    }
}
