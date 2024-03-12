<?php

namespace Models;

abstract class heroes
{
    protected int $hp;
    protected int|float $durability;
    protected string $guns;



    public function __construct(
        int $hp,
        int|float $durability,
        string $guns
    )
    {
        $this->hp = $hp;
        $this->durability = $durability;
        $this->guns = $guns;
    }

    public function getMaxDurability(): int|float
    {
        return $this->durability;
    }

    public function getCurrentHp(): int
    {
        return $this->hp;
    }

    public function getCurrentMaxDurability(): int|float
    {
        return $this->durability;
    }

    public function getCurrentGuns(): string
    {
        return $this->guns;
    }

}