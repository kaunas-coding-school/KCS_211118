<html>
<body>

<?php
if (!isset($_COOKIE['vartotojas'])) {
    echo 'Sausainėlis pavadinimu "vartotojas" nera sukurtas!';
} else {
    echo 'Sausainėlis "vartotojas" yra sukurtas!<br>';
    echo 'Jo reikšmė yra: '.$_COOKIE['vartotojas'];
}
?>

</body>
</html>