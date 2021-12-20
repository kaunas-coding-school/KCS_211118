<?php

class Person
{
    public string $vardas;
    public string $pavarde;
    public string $asmensKodas;

    public function __construct(int $kodas)
    {
        $this->asmensKodas = $kodas;
    }
}
