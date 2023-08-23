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
        $chartData = Order::select(
            DB::raw('DATE_FORMAT(tanggal_ambil, "%Y-%m") as month'),
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        $chartData->transform(function ($item) {
            $date = Carbon::createFromFormat('Y-m', $item->month);
            $item->month = $date->translatedFormat('F Y');
            return $item;
        });

        $data = $chartData->pluck('count')->toArray();
        $labels = $chartData->pluck('month')->toArray();
        return $this->chart->lineChart()
            ->setTitle('Pemesanan Kendaraan')
            ->addData('Kendaraan', $data)
            ->setHeight(400)
            ->setXAxis($labels);
    }
}
