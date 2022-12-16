<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function shop()
    {
        return view('website.shop');
    }

    public function listproducts()
    {
        return view('website.product.listproducts');
    }
    public function details($id)
    {
        $row = Product::findorfail($id);
        $cart = Cart::content();
        return view('website.product.detilis',compact('row','cart'));
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function about()
    {
        return view('website.about');
    }

    public function addToCart(Request $request)
    {


        $product = Product::find($request->product_id);

        $cart =  Cart::add($product->id, $product->name, $request->qty, $product->price);

        return redirect()->back();
    }

    public function deletedCart(Request $request)
    {

        Cart::remove($request->cart_id);
        return redirect()->back();
    }

    public function shoppingCart()
    {
        $cart = Cart::content();
//        dd($cart);
        return view('website.shoping',compact('cart'));
    }

    public function deletedCartShopping($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function checkOut()
    {
        $cart = Cart::content();
        return view('website.checkout',compact('cart'));
    }
}
