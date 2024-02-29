<?php

class fight
{
    public function fightwarrior() {
        if (warrior::class === archer::class)
            echo warrior::class, "win";
        else
            echo warrior::class, "lose";
    }
    public function fightarcher() {
        if (archer::class === mage::class)
            echo archer::class, "win";
        else
            echo archer::class, "lose";
    }
    public function fightmage() {
        if (mage::class === warrior::class)
            echo mage::class, "win";
        else
            echo mage::class, "lose";

    }
}

class damage
{
    protected const BASIC_DAMAGE = 10;

    public function getBasicDamage()
    {
        return static::BASIC_DAMAGE;
    }
    
}
class weight_weapons
{
    protected const GRIP_RESISTANT = 50;

    public function getGripResistant()
    {
        return static::GRIP_RESISTANT;
    }
}

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

abstract class closeheroes extends heroes
{

    protected weight_weapons $weight_weapons;
    protected damage $damage;


    public function __construct(
        int $hp, 
        int|float $durability, 
        string $guns, 
        weight_weapons $weight_weapons)
    {
        $this->weight_weapons = $weight_weapons;
        parent::__construct($hp, $durability, $guns);
    }

    public function __construct(
        int $hp,
        int|float $durability,
        string $guns,
        damage $damage)
    {
        $this->damage = $damage;
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
        return $this->hp - $this->hp * $this->getBasicDamageValue();
    }
    public function sayOnWin(): string
    {
        return $this->hp > 0;
    }
}

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



class warrior extends closeheroes
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

class mage extends rangeheroes
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

class weapons
{
    protected int $bullets;
    protected int $arrows;

}

class bow extends weapons
{

}

class crossbow extends weapons
{

}

class magic_stuff extends weapons
{

}

class sword extends weapons
{

}

class pistol extends weapons
{

}

$damage = new damage;
$weight_weapon = new weight_weapons;

$endurowarrior = new warrior(500, 300, 'sword', $weight_weapon);
$enduroarcher = new archer(300, 200, 'bow', $weight_weapon);
$enduromage = new mage(200, 250, 'magic_stuff', $weight_weapon);


//$hero_warrior = new heroes(500, 100, 'pistol');
//$hero_mage = new heroes(200, 200, 'magic_stuff');
//$hero_archer = new heroes(100, 300, 'bow');

echo "Max Durability is: " . $endurowarrior->getMaxDurability() . PHP_EOL;
echo "Current Durability is: " . $endurowarrior->getCurrentMaxDurability() . PHP_EOL;

echo "Current Hp is: " . $endurowarrior->getCurrentHp() . PHP_EOL;

echo "Current Gun is: " . $endurowarrior->getCurrentGuns() . PHP_EOL;

echo "warrior - " . $endurowarrior, $endurowarrior->getCurrentGuns() . PHP_EOL;
echo "archer - " . $enduroarcher, $enduroarcher->getCurrentGuns() . PHP_EOL;
echo "mage - " . $enduromage, $enduromage->getCurrentGuns() . PHP_EOL;
//Max Durability is: 300
//Current Durability is: 150
