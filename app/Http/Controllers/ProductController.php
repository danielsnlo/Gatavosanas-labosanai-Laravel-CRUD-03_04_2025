<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view("products.index", ['products' => $products]);
    }

    public function create(){
        return view("products.create");
    }

    public function store (Request $request){
        $data = $this->validateProduct($request);
        $newProduct = Product::create($data);
        return redirect(route('products.index'))->with('success', __('products.message_create_success'));
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $this->validateProduct($request);
        $product->update($data);
        return redirect(route('products.index'))->with('success', __('products.message_update_success'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('products.index'))->with('success', __('products.message_destroy_success'));
    }


    private function validateProduct(Request $request){
        return $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
    }
}
