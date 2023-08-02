<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PemakaianKendaraanChart;

class DashboardController extends Controller
{
    public function index(PemakaianKendaraanChart $chart)
    {
        $order = Order::all();
        return view('admin.dashboard.index', compact('order'), [
            'chart' => $chart->build(),
            'judul' => 'Dashboard'
        ]);
    }
}
