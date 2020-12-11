<?php

namespace App\Http\Controllers;

use App\Product;
//use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
       // dd($product);
            // add the product to cart
    \Cart::session(auth()->id())->add(array(
    'id' => $product->id,
    'name' => $product->name,
    'price' => $product->price,
    'quantity' => 1,
    'attributes' => array(),
    'associatedModel' => $product
    ));

    return redirect()->route('cart.index');
    }



    public function index()
    {
       $cartitems =  \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartitems'));
    }


    public function destroy($itemId)
    {
    \Cart::session(auth()->id())->remove($itemId );
        return back();
    }



    public function update($rowId)
    {
    \Cart::session(auth()->id())->update($rowId,[
         'quantity' => [
            'relative' => false,
            'value' => request('quantity')
           ]
     ] );
        return back();
    }
}
