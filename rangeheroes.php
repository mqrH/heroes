<?php

namespace Models;

abstract class rangeheroes extends closeheroes
{
    public function getCurrentHp(): int
    {
        $decreasedValueForWarrior = $this->getBasicDamageValue() / 2;
        return $this->hp - $this->hp * $decreasedValueForWarrior;
    }

    public function getCurrentMaxDurability(): int|float
    {
        $decreasedValueForMage = $this->getReducingGripValue() / 2;
        return $this->durability - $this->durability * $decreasedValueForMage;
    }
}