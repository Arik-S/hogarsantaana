<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Exports\DonationExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DonationController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donation = Donation::all();
        return view('admin.donation.index', compact('donation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        return view('admin.donation.show', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        return view('admin.donation.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $donation->update([
            'status' => $request->status
        ]);

        return redirect()->route('admin.donation.index')->with('info', 'El estado se actualizó satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
