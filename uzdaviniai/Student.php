<?php

namespace Uzdaviniai;

use Uzdaviniai\Person;
use Uzdaviniai\Grupe;

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
