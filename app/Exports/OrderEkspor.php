<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class OrderEkspor implements FromCollection, WithHeadings, WithColumnWidths, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    public function headings(): array
    {

        return [
            ' ',
            'Nama',
            'Kendaraan',
            'Divisi',
            'Supir',
            'Tanggal Ambil',
            'Tanggal Kembali',
            'Status'
        ];
    }
    public function collection()
    {
        return Order::with('kendaraan', 'supir', 'divisi')->get();
    }
    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 15,
            'C' => 10,
            'D' => 15,
            'E' => 15,
            'F' => 20,
            'G' => 20,
        ];
    }
    public function map($order): array
    {
        $approved = $order->status ? 'Ya' : 'Tidak';
        // Ambil kolom-kolom yang ingin Anda tampilkan dari model Customer
        return [
            $order->id,
            $order->name,
            $order->kendaraan->name,
            $order->supir->name,
            $order->divisi->name,
            $order->tanggal_ambil,
            $order->tanggal_kembali,
            $approved
        ];
    }
}
