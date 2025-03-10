<?php

namespace App\Services\Discounts;

use App\Interfaces\Discount;

class PercentageDiscount implements Discount
{
    public function __construct(private float $percentage)
    {
    }

    public function apply(float $price): float
    {
        return $price - ($price * $this->percentage / 100);
    }
}1-1000*0.1

?>