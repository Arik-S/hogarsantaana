<?php

namespace App\Exports;

use App\Models\Donation;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DonationExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $datos = DB::table('donations')
            ->select('id', 'user_name', 'product_name', 'quantity', 'delivery_method', 'phone_number', 'status', 'created_at')
            ->get();
    
        $datos = $datos->map(function ($item) {
            if ($item->status == 0) {
                $item->status = 'En espera';
            } elseif ($item->status == 1) {
                $item->status = 'Confirmado';
            } elseif ($item->status == 2) {
                $item->status = 'Cancelado';
            }
    
            if ($item->delivery_method == 1) {
                $item->delivery_method = 'Entrega a Local';
            } elseif ($item->delivery_method == 2) {
                $item->delivery_method = 'Buscar Donación';
            }
    
            return $item;
        });
    
        return $datos;
    }
    

    public function headings(): array
    {
        // Define los encabezados de las columnas
        return [
            'ID',
            'Donador',
            'Producto',
            'Cantidad',
            'Método de Entrega',
            'Número de Teléfono',
            'Estado',
            'Fecha de Creación',
        ];
    }
}
