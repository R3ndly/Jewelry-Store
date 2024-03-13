<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   

    public function add(Request $request, Product $product){

        $cart = Cart::firstOrCreate(
         [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ],
            ['quantity' => 0]
    );
        $cart->increment('quantity');

        return redirect()->back();

    }

    public function remove(Cart $cart){
        $cart->decrement('quantity');
        if ($cart->quantity == 0) {
            $cart->delete();
        }
        return redirect()->back()->with('success', 'Украшение удалено.');
    }

    public function main(){

          $cartItems = Cart::where('user_id', Auth::id())->get();
        $total = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });
        return view('cart.index', compact('cartItems', 'total'));
     }
 
}
