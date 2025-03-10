<?php

namespace App\Interfaces;

interface Discount
{
    public function apply(float $price): float;
}
