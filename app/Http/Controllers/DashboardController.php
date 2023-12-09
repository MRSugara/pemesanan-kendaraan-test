<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PemakaianKendaraanChart;

class DashboardController extends Controller
{
    public function index(PemakaianKendaraanChart $chart)
    {
        $order = Order::all();
    //     $months = [];
    //         foreach ($order as $m) {
    //         $month= $m->created_at;
    //         if ($month) {
    //             $monthCarbon= Carbon::createFromFormat('Y-m-d H:i:s',$month);
    //             $months[]= $monthCarbon->month;
    //         }
    //     }
    //     sort($months);

    //     $startDate = Carbon::create(2023, 1, 1); // Tanggal awal
    //     $endDate = Carbon::create(2023, 12, 31); // Tanggal akhir

    //     $currentDate = $startDate->copy(); // Salin tanggal awal untuk iterasi
    //     $bulan=[];

    //     while ($currentDate->lte($endDate)) {
    //     // Lakukan sesuatu dengan bulan (contoh: tampilkan nama bulan)
    //     $bulan[]= $currentDate->format('F');

    //     // Lanjutkan ke bulan berikutnya
    //     $currentDate->addMonth();
    // }

        return view('admin.dashboard.index', compact( 'order'), [
            'chart' => $chart->build(),
            'judul' => 'Dashboard',
        ]);
    }

}
