<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('product.product-list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = Validator::make($request->all(), [
    'name' => 'required|string|max:255',
    'price' => 'required|numeric',
    'discount_price' => 'nullable|numeric',
    'stock' => 'required|integer',
    'status' => 'required|in:active,inactive',
    'description' => 'nullable|string',
    'file' => 'nullable|file|mimes:jpg,jpeg,png,svg|max:2048',
    ]);

      if ($validated->fails()) {
        return back()->withErrors($validated)->withInput();
    }

    $slug = Str::slug($request->name);
    $count = DB::table('products')->where('slug', $slug)->count();
    if ($count > 0) {
        $slug .= '-' . ($count + 1);
    }

     if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('uploads');
        $file->move($destinationPath, $filename);
        $imgPath = 'uploads/' . $filename;
    }
    
        DB::table('products')->insert([
        'name' => $request->name,
        'slug' => $slug,
        'price' => $request->price,
        'discount_price' => $request->discount_price,
        'stock' => $request->stock,
        'status' => $request->status,
        'description' => $request->description,
        'product_image' => $imgPath,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('admin/product-list')->with('success', 'Product added Successfully!');

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
