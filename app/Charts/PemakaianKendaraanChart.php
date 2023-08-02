<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PemakaianKendaraanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        $chartData = Order::select(DB::raw('MONTH(tanggal_ambil) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy('month')
            ->get();

        $data = $chartData->pluck('count')->toArray();
        $labels = $chartData->pluck('month')->map(function ($month) {
            return Carbon::createFromFormat('!m', $month)->format('M'); // Mengubah angka bulan menjadi format tiga huruf (Jan, Feb, Mar, dst.)
        })->toArray();
        return $this->chart->lineChart()
            ->setTitle('Pemesanan Kendaraan')
            ->addData('Kendaraan', $data)
            ->setHeight(400)
            ->setXAxis($labels);
    }
}
