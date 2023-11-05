<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Donation;
use Livewire\WithPagination;
use App\Exports\DonationExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminDonations extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;
    
    
    public function render()
    { 
        $donation = Donation::where('user_name', 'LIKE', '%' . $this->search . '%')
            ->orderBy('status', 'asc')
            ->paginate(10); // Cambia 10 al número de elementos por página que desees
        return view('livewire.admin-donations', compact('donation'));
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function excel()
    {
        /*Si no coloco estas lineas Falla*/
        ob_end_clean();
        ob_start();
        /*Si no coloco estas lineas Falla*/
        return Excel::download(new DonationExport, 'donations.xlsx');
    }
}
