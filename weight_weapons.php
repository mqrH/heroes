<?php

namespace Models;

class weight_weapons
{
    protected const GRIP_RESISTANT = 50;

    public function getGripResistant()
    {
        return static::GRIP_RESISTANT;
    }
}
