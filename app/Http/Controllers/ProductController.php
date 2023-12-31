<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;

class ProductController extends Controller
{


    public function productList()
    {
        $activeProducts = Product::where('status', 0)->get();

        return view('products', ['products' => $activeProducts]);
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
        //$permissions = Permission::all();

        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Reglas de validación para la imagen
        ]);
        $imagePath = $request->file('image')->store('public/productos');

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);        

        return redirect()->route('admin.productos.edit', $product)->with('info', 'El producto se creó satisfactoriamente');
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
    public function edit(Product $producto)
    {
        // return view('admin.productos.edit', compact('product'));
        return view('admin.productos.edit', compact('producto'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $producto)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Reglas de validación para la imagen
            'status' => 'required',
        ]);
    
        // Actualizar los campos de nombre y descripción
        $producto->name = $request->name;
        $producto->description = $request->description;
    
        if ($request->hasFile('image')) {
            // Almacenar la nueva imagen y actualizar el campo 'image'
            $imagePath = $request->file('image')->store('public/productos');
            $producto->image = $imagePath;
        }
        
        $producto->status = $request->status;
        // Guardar los cambios en el producto utilizando update
        $producto->update([
            'name' => $producto->name,
            'description' => $producto->description,
            'image' => $producto->image,
            'status' => $producto->status,
        ]);
    
        return redirect()->route('admin.productos.edit', $producto)->with('info', 'El producto se actualizó satisfactoriamente');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $producto)
    {
        // Verifica si el producto existe
        if ($producto) {
            // Elimina el producto
            $producto->delete();

            // Redirige al listado de productos o a donde desees
            return redirect()->route('admin.productos.index')->with('info', 'El producto se eliminó con éxito');
        } else {
            // Manejo de error si el producto no existe
            return redirect()->route('admin.productos.index')->with('error', 'El producto no se pudo eliminar');
        }
    }

}
