<?php

require_once 'libs/fs.php';

$manoFailas = "sablonas.html";
copy($manoFailas, 'libs/mano_failas.html');

$resursas = skaitytiFaila($manoFailas, 'ra+');

redaguotiFaila($resursas, 'Mano naujas tekstas');

$kiek = filesize($manoFailas);
spausdintiFaila($resursas, $kiek);

copy($manoFailas, 'libs/mano_failas_new.html');

unlink($manoFailas);

echo "Darbas su JSON:<br>";
$jsonString = '{"Tautvydas": 2000, "Jonas": 3000}';
echo $jsonString;
$array = json_decode($jsonString, true);
$array = array_merge($array, ['kestas' => 4000]);
foreach ($array as $key => $item) {
    echo $key.' = '.$item.'<br>';
}
echo json_encode($array);

echo "Darbas su REGEXP:<br>";
$text = "We at Guru strive to make quality to the masses";
$text = preg_replace("/Guru/", '<span style="background:yellow">Guru</span>', $text);
echo $text;
