<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('delete_status', 0)->paginate(10);
        return view('admin.product.index',compact('products'),['page_title'=>'Product List']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $products = new Product;
        $products->category = $request->category;
        $products->name = $request->name;
        $products->price = $request->price;
        if($request->has('image')){
            $products->image = imageUpload($request->file('image'),'backend/images/product/','1');
        }
        $products->save();
        return redirect()->route('admin.product.index')->with('success', 'Data Save Successfully !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->category = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        if($request->has('image')){
            $product->image = imageUpload($request->file('image'),'backend/images/product/','1');
        }
        $product->save();
        return redirect()->route('admin.product.index')->with('success', 'Data Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete_status = 1;
        $product->save();
        return redirect()->route('admin.product.index')->with('success', 'Data Delete Successfully !!');
    }
}
