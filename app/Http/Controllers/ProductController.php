<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Product::all();

        return view('product.list')->with('productlist', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $users = new Product;

        $users->product_id = $req->product_id;
        $users->product_name = $req->product_name;
        $users->category = $req->category;
        $users->unit_price = $req->unit_price;
        $users->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $user = Product::find($product);

        return view('product.details')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $users= Product::find($product);

        return view('product.edit')->with('user', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Product $product)
    {
        $users = Product::find($product);
        
        $users->product_id = $req->product_id;
        $users->product_name = $req->product_name;
        $users->category = $req->category;
        $users->unit_price = $req->unit_price;
        $users->save();

        return redirect()->route('product.index');
    }

// ============================ End Update ====================================

    public function delete(Product $product){
  
        $users = Product::find($product);
        
        return view('product.delete')->with('user', $users);
    }
// ============================ End Delete ====================================
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $users = Product::find($product);
        $users->delete();

         return redirect()->route('product.index');
    }
}
