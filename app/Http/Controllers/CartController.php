<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function index(Request $request)
  {
    return $request->user()->cart;
  }

  public function store(Request $request)
  {
    $request->validate([
      'product_id' => 'required|exists:products,id',
      'quantity' => 'required|integer|min:1',
    ]);

    $product = Product::findOrFail($request->input('product_id'));
    $quantity = $request->input('quantity');

    $request->user()->cart()->syncWithoutDetaching([
      $product->id => ['quantity' => $quantity],
    ]);

    return response()->json(['message' => 'Product added to cart']);
  }
}
