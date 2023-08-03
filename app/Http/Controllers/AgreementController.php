<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Supir;
use App\Models\Divisi;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AgreementController extends Controller
{
    public function index()
    {
        $auth = Auth::user()->divisi_id;
        $order = Order::where('divisi_id', $auth)->get();
        $orders = Order::all();

        return view('kabag.index', [
            'judul' => 'Persetujuan'
        ], compact('order', 'orders',  'auth'));
    }
    public function approved($id)
    {
        // ambil data product berdasarkan id
        $auth = Auth::user()->divisi_id;
        $order = Order::find($id);
        if ($auth != 1) {
            $order->update([
                'konfirmasi2' => 1,
            ]);
        } else {
            $order->update([
                'konfirmasi1' => 1,
            ]);
        }
        if ($order->konfirmasi1 == 1 && $order->konfirmasi2 == 1) {
            $order->update([
                'status' => 1,
            ]);
        } elseif ($order->konfirmasi1 == 1 && $order->divisi_id == 1) {
            $order->update([
                'status' => 1,
            ]);
        }

        // update data product


        return redirect('/persetujuan');
    }
    public function reject($id)
    {
        // ambil data product berdasarkan id
        $auth = Auth::user()->divisi_id;
        $order = Order::find($id);
        if ($auth != 1) {
            $order->update([
                'konfirmasi2' => 0,
            ]);
        } else {
            $order->update([
                'konfirmasi1' => 0,
            ]);
        }
        if ($order->konfirmasi1 == 1 && $order->divisi_id == 1) {
            $order->update([
                'status' => 1,
            ]);
        }
        // redirect ke halaman product.index
        return redirect('/persetujuan');
    }
}
