<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandController extends Controller
{
    public function placeOrder(Request $request) 
    { 
        // Validate the request 
        $request->validate([ 
            'items' => 'required|array', 
            'items.*.product_id' => 'required|exists:products,id', 
            'items.*.quantity' => 'required|integer|min:1' 
        ]); 
 
        // Calculate total amount 
        $totalAmount = 0; 
        $commandItems = []; 
 
        foreach ($request->items as $item) { 
            $product = Product::find($item['product_id']); 
            if ($product->stock < $item['quantity']) { 
                return 'stockinsiffusant'; 
            } 
 
            $totalAmount += $product->price * $item['quantity']; 
 
            // Prepare command item data 
            $commandItems[] = [ 
                'product_id' => $product->id, 
                'quantity' => $item['quantity'], 
                'price' => $product->price, 
            ]; 
 
            // Update product stock 
            $product->stock -= $item['quantity']; 
            $product->save(); 
        } 
 
        // Create the command 
        $command = Command::create([ 
            'user_id' => Auth::id(), 
            'total_amount' => $totalAmount, 
            'status' => 'pending' 
        ]); 
 
        // Save command items 
        foreach ($commandItems as $commandItem) { 
            $command->commandItems()->create($commandItem); 
        } 
 
    } 
 
    public function updatecommandStatus($commandId, Request $request) 
    { 
        $command = Command::findOrFail($commandId); 
        $command->status = $request->input('status'); 
        $command->save(); 
 
    } 
}

