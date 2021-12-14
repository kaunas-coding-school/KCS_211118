<html>
<head>
    <link rel="stylesheet" href="css/mano_dizainas.css">
</head>
<body>
<?php

//include 'libs/Matematika.php';
//require 'libs/DuomenuIsvedimas.php';
include 'libs/konvertavimai.php';

//$x = 5;
//$y = 6;
//
//spausdintiTeksta('Kintamuju $x ir $y sudetis: ');
//spausdintiTeksta(sudeti($x, $y));
//echo '<br>';
//spausdintiTeksta('Kintamuju $x ir $y atimtis: ');
//spausdintiTeksta(atimti($x, $y));
//echo '<br>';
//$mas = ['jonas' => 15, 'kestas' => 22, 'petras' => 'Petrinis'];
//spausdintiTeksta("Masyvas: ");
//spausdintiHtml($mas);
//spausdintiHtml($mas, 'mano');

echo "<br>";
echo "100 km in myles: ".konvertuoti(100, 'mylios');
echo "<br>";
echo "62.1371 km in myles: ".konvertuoti(62.1371, 'kilometrai');
echo "<br>";
echo "10 kg in svarai: ".konvertuoti(10, 'kg');

?>


</body>
</html>