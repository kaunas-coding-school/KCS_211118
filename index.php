<?php

$ceu = [
    "Italy"          => "Rome",
    "Luxembourg"     => "Luxembourg",
    "Belgium"        => "Brussels",
    "Denmark"        => "Copenhagen",
    "Finland"        => "Helsinki",
    "France"         => "Paris",
    "Slovakia"       => "Bratislava",
    "Slovenia"       => "Ljubljana",
    "Germany"        => "Berlin",
    "Greece"         => "Athens",
    "Ireland"        => "Dublin",
    "Netherlands"    => "Amsterdam",
    "Portugal"       => "Lisbon",
    "Spain"          => "Madrid",
    "Sweden"         => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus"         => "Nicosia",
    "Lithuania"      => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia"        => "Tallin",
    "Hungary"        => "Budapest",
    "Latvia"         => "Riga",
    "Malta"          => "Valetta",
    "Austria"        => "Vienna",
    "Poland"         => "Warsaw",
];
//
ksort($ceu); // Pakal rakta
foreach ($ceu as $valstybe => $sostine) {
    echo $valstybe.' = '.$sostine."\n";
}

echo "***************************\n";
asort($ceu); // Pakal reisme
for ($i = 0, $iMax = count($ceu); $i < $iMax; $i += 2) {
    $valstybe = array_keys($ceu)[$i];
    $sostine = $ceu[$valstybe];

    echo $valstybe.' = '.$sostine."\n";
}

echo "***************************\n";
foreach ($ceu as $valstybe => $sostine) {
    if (
        str_contains($valstybe, 'A')
        ||
        str_contains($sostine, 'A')
    ) {
        echo $valstybe.' = '.$sostine."\n";
    }
}

$temp = [
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73,
];
$suma = 0;

foreach ($temp as $dienosTemp) {
    $suma += $dienosTemp;
}

$vidurkis = $suma / count($temp);
echo "Temperatūra:";
spausdintiGrafiskai($temp, count($temp));

echo "Vidutinė temperatūra: $vidurkis";

rsort($temp);
echo "<br>Penkios auksciausios: ";
spausdintiKiekElementu($temp, count($temp));

sort($temp);
echo "Penkios zemiausios: ";
spausdintiGrafiskai($temp, 5);


function spausdintiKiekElementu(array $temp, $kiek): void
{
    for ($i = 0; $i < $kiek; $i++) {
        echo " ".$temp[$i];
    }
    echo "<br>";
}

function spausdintiGrafiskai(array $temp, $kiek): void
{
    $i = 0;
    foreach ($temp as $value) {
        if ($i < $kiek) {
            echo "<div style='background-color: gray; display: block; width: {$value}px'>$value</div>";
        }
        $i++;
    }
    echo "<br>";
}


$arr = [123, 654, '💀'];

$buvusiMax = $naujasMax = -9999999;
$raktas = null;

foreach ($arr as $key => $item) {
    $naujasMax = strlen($item);

    if ($naujasMax > $buvusiMax) {
        $raktas = $key;
        $buvusiMax = $naujasMax;
    }
}
if (null !== $raktas) {
    echo "Rastas max elementas $arr[$raktas] eiles nr $raktas";
} else {
    echo 'Nerasta';
}


$vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];
$pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė", "Jonė", "Kristė"];

$c = [1, 1, 2, 2, 1, 2, 2, 3, 1, 3, 2, 1, 1, 4, 2, 4, 1, 5, 2, 7, 1, 6, 2, 5, 1, 7, 2, 6];

for ($i = 0, $iMax = count($c); $i < $iMax; $i += 2) {
    echo $vardai[$c[$i] - 1].' '.$pavardes[$c[$i + 1] - 1]."\n";
}
