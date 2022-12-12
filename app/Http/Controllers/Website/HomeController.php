<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function details()
    {
        return view('website.product.detilis');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function about()
    {
        return view('website.about');
    }
}
