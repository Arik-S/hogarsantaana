<?php

namespace App\Livewire;

use App\Exports\ProductExport;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class AdminProducts extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $page = 1;

    public $search;

    public function render()
    {
        $products = Product::where('name', 'LIKE', '%' . $this->search . '%')
            ->paginate(8); // Cambia 10 al número de elementos por página que desees
        //dd($this->search);
        return view('livewire.admin-products', compact('products'));
    }
    
    public function limpiar_page(){
        $this->reset('page');
    }

    public function excel()
    {
        /*Si no coloco estas lineas Falla*/
        ob_end_clean();
        ob_start();
        /*Si no coloco estas lineas Falla*/
        return Excel::download(new ProductExport, 'products.xlsx');
    }
}
