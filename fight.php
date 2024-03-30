<?php

namespace Models;

use Models\archer;
use Models\mage;
use Models\warrior;

$fight = new fight;
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
