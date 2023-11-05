<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $donationCount = Donation::count();
        $userCount = User::count();
        $productCount = Product::count();
        return view('admin.index', compact('donationCount', 'userCount', 'productCount'));
    }
    
}
