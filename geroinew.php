<?php

use Models\weight_weapons;
use Models\damage;
use Models\archer;
use Models\warrior;
use Models\mage;
use Models\fight;
use Models\closeheroes;
use Models\heroes;
use Models\rangeheroes;

require __DIR__ . '/Vendor/autoload.php';

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


//echo "easy" . sayOnWin() . PHP_EOL;
//echo "we are back" . sayOnLose() . PHP_EOL;

//Max Durability is: 300
//Current Durability is: 150
