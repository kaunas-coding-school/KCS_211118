<?php

include 'admin/Veichles.php';

class Car extends Veichles
{
    public string $spalva;
    public string $greitis;
    private float $rida;


    public function __construct()
    {
        $this->rida = 0;
    }

    public function vaziuoti(float $kiekLaiko): void
    {
        echo "Automobilis važiuoja ".$this->greitis." greičiu ".$kiekLaiko.' valandu';
        $kelias = (float)$this->greitis * $kiekLaiko;
        $this->didintiRida($kelias);
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }

    public function gautiRida(): float
    {
        return $this->rida;
    }

    private function didintiRida(float $kiek)
    {
        $this->rida += $kiek;
    }
}
