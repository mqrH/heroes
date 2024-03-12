<?php

namespace Models;

$damage = new damage;
class damage
{
    protected const BASIC_DAMAGE = 10;

    public function getBasicDamage()
    {
        return static::BASIC_DAMAGE;
    }

    protected const WARRIOR_DAMAGE = 20;

    public function getWarriorDamage()
    {
        return static::WARRIOR_DAMAGE;
    }
    protected const MAGE_DAMAGE = 15;

    public function getMageDamage()
    {
        return static::MAGE_DAMAGE;
    }

    protected const ARCHER_DAMAGE = 12;

    public function getArcherDamage()
    {
        return static::ARCHER_DAMAGE;
    }

}