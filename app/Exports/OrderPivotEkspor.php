<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class OrderPivotEkspor implements FromCollection, WithHeadings, WithMapping
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function headings(): array
    {
        return [
            'Divisi',
            'Kendaraan',
            'Bulan',
            'Jumlah Pesanan'
        ];
    }

    public function collection()
    {
        return Order::with('kendaraan', 'supir', 'divisi')->get();
    }

    public function map($item): array
    {

        return [
            $item->divisi->name,
            $item->kendaraan->name,
            $item->bulan,
            $item->jumlah_pesanan
        ];
    }
}
