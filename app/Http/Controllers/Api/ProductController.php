<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return response()->json([
           'success' => true,
           'message' => 'Product List',
           'data' => Product::all()
       ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data=$request->validated();
        $img=$request->product_image;
        $extension=$img->getClientOriginalExtension();
        $imageName=time().'.'.$extension;
        $data['product_image']=$imageName;
//        $img->move(public_path('/')."upload/",$imageName);
        $product=Product::create($data);
        return response()->json(['message'=>'Product Added Successfully','data'=>$product],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
