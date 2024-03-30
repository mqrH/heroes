<?php

namespace Models;

abstract class closeheroes extends heroes
{
    protected fight $fight;
    protected weight_weapons $weight_weapons;
    protected damage $damage;


    public function __construct(
        int            $hp,
        int|float      $durability,
        string         $guns,
        weight_weapons $weight_weapons)
    {
        $this->weight_weapons = $weight_weapons;
        parent::__construct($hp, $durability, $guns);
    }

    abstract public function getBasicDamageValue(): int;
    abstract public function getReducingGripValue(): int|float;

    public function getCurrentMaxDurability(): int|float
    {
        return $this->durability - $this->durability * $this->getReducingGripValue();
    }
    public function getCurrentHp(): int
    {
        return $this->hp;
    }
    public function sayOnWin(): string
    {
        return $this->hp > 0;
    }
}