<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Discount as DiscountInterface;
use App\Services\Discounts\FixedDiscount;
use App\Services\Discounts\PercentageDiscount;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(DiscountInterface::class, function ($app) {
            $type = request()->input('type', 'fixed');
            $value = request()->input('value', 0);
            
            return $type === 'percentage'
                ? new PercentageDiscount((float) $value)
                : new FixedDiscount((float) $value);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
