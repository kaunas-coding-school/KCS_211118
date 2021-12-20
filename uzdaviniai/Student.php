<?php

use JetBrains\PhpStorm\Pure;

include 'Person.php';
include 'Grupe.php';

class Student extends Person
{
    private Grupe $grupe;

    public function gautiGrupe(): Grupe
    {
        return $this->grupe;
    }

    public function priskirtiGrupe(Grupe $grupe): void
    {
        $this->grupe = $grupe;
    }
}
