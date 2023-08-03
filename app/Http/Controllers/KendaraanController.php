<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKendaraanRequest;
use App\Http\Requests\UpdateKendaraanRequest;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('admin.kendaraan.index', compact('kendaraan'), [
            'judul' => 'Kendaraan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraan = Kendaraan::all();
        return view('admin.kendaraan.create', ['judul' => 'Kendaraan']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kendaraan = Kendaraan::create([
            'name' => $request->name,
            'plat' => $request->plat,
            'bbm' => $request->bbm,
            'service' => $request->service,
            'riwayat' => $request->riwayat,
            'status' => $request->status
        ]);
        return redirect('/kendaraan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);

        return view('admin.kendaraan.edit', ['judul' => 'Kendaraan'], compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::where('id', $id)->update([
            'name' => $request->name,
            'plat' => $request->plat,
            'bbm' => $request->bbm,
            'service' => $request->service,
            'riwayat' => $request->riwayat,
            'status' => $request->status
        ]);
        return redirect('/kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan, $id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->delete();

        return redirect('/kendaraan');
    }
}
