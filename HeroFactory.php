<?php

namespace Models;

use Models\heroes;

class HeroFactory {
    public static function createHero($hp, $guns, $durability) {
        return new heroes($hp, $guns, $durability);
    }
}