<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    public function index()
    {
        return view("backend.pages.product.add");
    }

    public function insert(Request $data)
    {
        $product = new Product;
        $product->name = $data->name;
        $product->des = $data->des;
        $product->price = $data->price;
        $product->quantity = $data->quantity;
        $product->status = $data->status;
        $product->save();
        return back();

    }


    public function show()
    {
        $products = Product::all();
        return view("backend.pages.product.manage", compact('products'));
    }

    public function active($id)
    {
        $product = Product::find($id);
        $product->status = '2';
        $product->update();
        return back();
    }
    public function inactive($id)
    {
        $product = Product::find($id);
        $product->status = '1';
        $product->update();
        return back();
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $product->update();
        return back();
    }
}