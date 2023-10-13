<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductCreate extends Component
{
    public $name;
    public $price;
    public $description;
    public $image;

    public function createProduct()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|url',
        ]);

        Product::create($validatedData);

        // Limpia los campos después de guardar el producto
        $this->reset(['name', 'price', 'description', 'image']);
    }

    public function render()
    {
        return view('livewire.admin.product-create');
    }
}

