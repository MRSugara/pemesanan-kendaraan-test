<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSupirRequest;
use App\Http\Requests\UpdateSupirRequest;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supir = Supir::all();
        return view('admin.supir.index', compact('supir'), [
            'judul' => 'Supir'
        ]);
    }


    public function store(Request $request)
    {
        $true = true;
        $supir = Supir::create([
            'name' => $request->name,
            'status' => $true
        ]);
        return redirect('/supir');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supir $supir, $id)
    {
        $supir = Supir::find($id);
        return view('admin.supir.edit', compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supir $supir, $id)
    {
        $supir = Supir::where('id', $id)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);
        return redirect('/supir');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supir = Supir::find($id);
        $supir->delete();
        return redirect('/supir');
    }
}
