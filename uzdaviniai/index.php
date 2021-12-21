<?php

require_once __DIR__.'/../vendor/autoload.php';

use Uzdaviniai\Student;
use Uzdaviniai\Grupe;

$log = new Monolog\Logger('mano_aplikacija');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

try {
    $studentai[0] = new Student(30505050505);

    $grupe = new Grupe('KCS777V', 72);

    $asmensKodai = [
        31212121212,
        41502020202,
        60101010101,
        50202020202,
        40303030303,
    ];


    for ($i = 0; $i < 5; $i++) {
        $naujasStudentas = new Student($asmensKodai[$i]);
        $naujasStudentas->priskirtiGrupe($grupe);

        $studentai[] = $naujasStudentas;
    }

    foreach ($studentai as $studentas) {
        $lytis = (int)($studentas->asmensKodas / 10000000000);
        if ($lytis === 3 || $lytis === 5) {
            echo 'Studentas '.$studentas->asmensKodas." yra vyras\n";
        } else {
            echo 'Studentas '.$studentas->asmensKodas." yra moteris\n";
        }
    }
    /*

    foreach ($studentai as $studentas) {
        echo $naujasStudentas->gautiGrupe()->gautiPavadinima() . ' '
            . $studentas->asmensKodas . "\n";
    }
    */
} catch (\Exception $exception) {
    echo "Oi... nutiko klaida.";
    $log->warning($exception->getMessage());
}