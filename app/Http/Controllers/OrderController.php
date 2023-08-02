<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Supir;
use App\Models\Divisi;
use App\Models\Kendaraan;
use App\Exports\OrderEkspor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        $divisi = Divisi::all();
        $supir = Supir::all();
        $kendaraan = Kendaraan::all();
        return view('admin.order.index', compact('kendaraan', 'order', 'divisi', 'supir'), [
            'judul' => 'Order'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order = Order::all();
        $divisi = Divisi::all();
        $supir = Supir::where('status', 1)->get();
        $kendaraan = Kendaraan::where('status', 1)->get();
        return view('admin.order.create', compact('kendaraan', 'order', 'divisi', 'supir'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $false = false;
        $order = Order::create([
            'name' => $request->name,
            'kendaraan_id' => $request->kendaraan,
            'divisi_id' => $request->divisi,
            'tanggal_ambil' => $request->tglambil,
            'tanggal_kembali' => $request->tglkembali,
            'supir_id' => $request->supir,
            'status' => $false,
        ]);
        return redirect('/order');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $divisi = Divisi::all();
        $supir = Supir::all();
        $kendaraan = Kendaraan::all();
        return view('admin.order.edit', compact('kendaraan', 'order', 'divisi', 'supir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $false = false;
        $order = Order::where('id', $id)->update([
            'name' => $request->name,
            'kendaraan_id' => $request->kendaraan,
            'divisi_id' => $request->divisi,
            'supir_id' => $request->supir,
            'tanggal_ambil' => $request->tglambil,
            'tanggal_kembali' => $request->tglkembali,
            'status' => $false
        ]);
        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/order');
    }
    public function ekspor()
    {
        return Excel::download(new OrderEkspor, 'datapesanan.xlsx');
    }
}
