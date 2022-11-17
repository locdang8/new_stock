<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = DB::table('product')->select('*');
        $products = $products->get();
        $title = 'Products';    
        return view('/admin/product', compact('products', 'title'));
    }

    public function show($id)
    {
        $products = product::where('id', '=', $id)->select('*')->first();
        $des = html_entity_decode($news->description);
        return view('/admin/productdetail', compact('products', 'des'));
    }
}