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