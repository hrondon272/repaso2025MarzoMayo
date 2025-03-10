<?php

namespace App\Services\Discounts;

use App\Interfaces\Discount;

class FixedDiscount implements Discount
{
    public function __construct(private float $amount)
    {
    }

    public function apply(float $price): float
    {
        if ($price - $this->amount)
            return $price - $this->amount;

        return $price;
    }
}

?>