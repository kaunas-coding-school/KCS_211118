<html>
<head>
    <link rel="stylesheet" href="css/mano_dizainas.css">
</head>
<body>
<?php

include 'libs/Matematika.php';
require 'libs/DuomenuIsvedimas.php';

$x = 5;
$y = 6;

spausdintiTeksta('Kintamuju $x ir $y sudetis: ');
spausdintiTeksta(sudeti($x, $y));
echo '<br>';
spausdintiTeksta('Kintamuju $x ir $y atimtis: ');
spausdintiTeksta(atimti($x, $y));
echo '<br>';
$mas = ['jonas' => 15, 'kestas' => 22, 'petras' => 'Petrinis'];
spausdintiTeksta("Masyvas: ");
spausdintiHtml($mas);
spausdintiHtml($mas, 'mano');

?>


</body>
</html>