<?php

class Grupe
{
    private string $name;
    private int $trukme;

    public function __construct(string $name, int $trukme)
    {
        $this->name = $name;
        $this->trukme = $trukme;
    }

    public function gautiPavadinima(): string
    {
        return $this->name;
    }

    public function gautiTrukme(): int
    {
        return $this->trukme;
    }
}
