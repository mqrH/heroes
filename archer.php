<?php

namespace Models;

class archer extends closeheroes
{
    public function getReducingGripValue(): int|float
    {
        return $this->weight_weapons->getGripResistant() / 100;
    }
    public function getBasicDamageValue(): int
    {
        return $this->damage->getBasicDamage() / 50;
    }
}