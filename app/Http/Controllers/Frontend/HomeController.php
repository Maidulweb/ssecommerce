<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
       $data = [];
       $data['products'] = Product::select(['id', 'title', 'slug', 'image', 'price', 'sale_price'])->where('active', 1)->paginate(6);

       return view('frontend.home', $data);
    }
}
