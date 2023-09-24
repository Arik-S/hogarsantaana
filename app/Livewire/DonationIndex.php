<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Article;

class DonationIndex extends Component
{
    use WithPagination;

    public $perPage = 8; // Establece la cantidad inicial de elementos por página

    public function render()
    {
        $articles = Article::latest('id')->paginate($this->perPage);

        return view('livewire.donation-index', compact('articles'));
    }

    public function loadMore()
    {
        $this->perPage += 8; // Aumenta la cantidad de elementos por página al cargar más
    }
}




/*
namespace App\Livewire;

use Livewire\Component;

use App\Models\Article;

class DonationIndex extends Component
{
    public function render()
    {
        $articles = Article::latest('id')->paginate(8);
        
        return view('livewire.donation-index', compact('articles'));
    }
}
*/