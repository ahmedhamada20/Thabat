<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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


    public function order_paymaents(Request $request)
    {

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'total' => Cart::subtotal(),
            'quantity' => 1,
            'status' => Order::ORDERCOMPTITED,
            'code' => 'ORD-' . Str::random(15),
        ]);

        foreach (Cart::content() as $item) {
            DB::table('order_product')->insert([
                'product_id' => $item->id,
                'order_id' => $order->id,
            ]);
        }


        Mail::to('hamada2031995@gmail.com')->send(new \App\Mail\MyTestMail($order));

        session()->forget('coupon');
        Cart::destroy();
        toastr()->success('لقد تم تنفيذ طلبكم بنجاح');
        return redirect()->back();
    }
}
