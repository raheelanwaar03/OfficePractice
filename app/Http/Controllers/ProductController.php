<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $products = product::get();
        return view('home',[
            'products' => $products
        ]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request,)
    {
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $product = new product();
        $product->name = $validate['name'];
        $product->description = $validate['description'];
        $product->price = $validate['price'];
        $product->quantity = $validate['quantity'];
        $product->save();
        return redirect()->route('home')->with('success','Product created successfully');
    }
    public function show($id)
    {
        $product = product::find($id);
        return view('show',[
            'product' => $product
        ]);
    }
    public function edit($id)
    {
        $product = product::find($id);
        return view('edit',[
            'product' => $product
        ]);
    }
    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $task = product::find($id);
        $task->name = $validate['name'];
        $task->description = $validate['description'];
        $task->price = $validate['price'];
        $task->quantity = $validate['quantity'];
        $task->save();
        return redirect()->route('home')->with('update','Product updated successfully');
    }
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->route('home')->with('delete','Product deleted successfully');
    }
}
