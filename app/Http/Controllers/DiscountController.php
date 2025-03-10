<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Interfaces\Discount;

class DiscountController extends Controller
{
    public function __construct(private Discount $discountInterface)
    {
    }

    public function calculate(Request $request): JsonResponse
    {
        return response()->json([
            'original_price' => $request->price,
            'new_price' => $this->discountInterface->apply((float) $request->price)
        ], Response::HTTP_OK);
    }
}
