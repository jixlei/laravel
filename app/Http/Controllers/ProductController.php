<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        // 产品
        $products = Product::orderby('id', 'desc')->take(12)->paginate(6);
        $links = $products->links();
        $products = object_chunk($products, 3);
        // 底部信息
        $footer = $this->footer();
        return view('product', compact("products", "links", "footer"));
    }
}
