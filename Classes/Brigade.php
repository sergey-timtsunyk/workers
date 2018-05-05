<?php

namespace App\Classes;

class Brigade
{
    private $brigadier;

    public function __construct(Brigadier $brigadier)
    {
        $this->brigadier = $brigadier;
    }
}
