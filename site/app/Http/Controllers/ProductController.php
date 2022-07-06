<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|max:50',
            'category' => 'required',
            'resume' => 'required',
            'description' => 'required',
            'price' => 'required',
            'picture' => 'required',
            'quantity' => 'required',
        ]);

        Product::create($validation);
        return redirect('/catalogue');
    }
}
