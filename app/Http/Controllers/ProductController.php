<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    
    public function index()
    {
        $products = Product::all();

        return view('admin.productos.index', compact('products'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('admin.productos.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'permissions' => 'required'
        ]);
        
        $product = Product::create([
            'name' => $request->name
        ]);

        $product->permissions()->attach($request->permissions);

        return redirect()->route('products')->with('info', 'El producto se creó satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.productos.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $permissions = Permission::all();
        return view('admin.productos.edit', compact('product', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'permissions' => 'required'
        ]);

        $product->update([
            'name' => $request->name
        ]);

        $product->permissions()->sync($request->permissions);

        return redirect()->route('admin.productos.edit', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products')->with('info', 'El producto se eliminó con éxito');
    }
}