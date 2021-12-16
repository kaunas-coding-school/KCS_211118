<?php

class Car
{
    public string $spalva;
    public string $greitis;

    public function vaziuoti(): void
    {
        echo "Automobilis važiuoja ".$this->greitis." greičiu";
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }
}
