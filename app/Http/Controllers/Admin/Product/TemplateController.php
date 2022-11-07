<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index() {
        return view('admin.product.template', [
            'title' => "Template"
        ]);
    }
}
