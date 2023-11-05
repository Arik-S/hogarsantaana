<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $datos = DB::table('products')
            ->select('id', 'name', 'description', 'image', 'status', 'created_at', 'updated_at')
            ->get();
    
        $datos = $datos->map(function ($item) {
            if ($item->status == 0) {
                $item->status = 'Activo';
            } elseif ($item->status == 1) {
                $item->status = 'Desactivado';
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
            'Nombre',
            'Descripcion',
            'Imagen',
            'Estado',
            'Fecha de creacion',
            'Fecha de modificacion'
        ];
    }
}
