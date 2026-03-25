<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zipCode' => 'required|string|max:50',
            'mobile' => 'required|string|max:20',
            'payment_method' => 'required|string',
            'items' => 'required|array',
            'subtotal' => 'required|numeric',
            'shipping' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Order placed successfully',
            'data' => $request->all(),
        ], 200);
    }
}