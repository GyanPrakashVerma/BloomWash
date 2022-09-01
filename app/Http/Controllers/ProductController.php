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
      $product= Product::where('delete_status',0)->get();
      return view('backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $product =new Product;
       $product->product=$request->pname;
       $product->standard_price=$request->sprice;
       $product->custom_price=$request->cprice;
       if($request->image!=null){
        $file_photo=time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(('Product'),$file_photo);
        $product->product_image=$file_photo;
}
$product->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       return view('backend.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->product=$request->pname;
        $product->standard_price=$request->sprice;
        $product->custom_price=$request->cprice;
        if($request->image!=null){
         $file_photo=time().'.'.request()->image->getClientOriginalExtension();
         $request->image->move(('Product'),$file_photo);
         $product->product_image=$file_photo;
 }
 $product->save();
 return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete_status=1;
        $product->save();
        return redirect()->route('product.index');
    }
}
