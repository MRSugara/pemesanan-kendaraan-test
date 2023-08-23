<?php

namespace App\Http\Controllers\API;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return response()->json([
            'success' => true,
            'massage' => 'daftar data order',
            'data' => $orders
        ], 200);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kendaraan' => 'required',
            'name' => 'required|string|min:3',
            'divisi' => 'required',
            'supir' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        // // ubah nama file
        // $imageName = time() . '.' . $request->image->extension();

        // // simpan file ke folder public/product
        // Storage::putFileAs('public/product', $request->image, $imageName);

        $order = Order::create([
            'kendaraan_id' => $request->kendaraan,
            'name' => $request->name,
            'divisi_id' => $request->divisi,
            'supir_id' => $request->supir,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan',
            'data' => $order
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kendaraan' => 'required',
            'name' => 'required|string|min:3',
            'divisi' => 'required',
            'supir' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        $order = Order::find($id);

        if ($order) {
            $order = $order->update([
                'kendaraan_id' => $request->kendaraan,
                'name' => $request->name,
                'divisi_id' => $request->divisi,
                'supir_id' => $request->supir,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil diupdate',
                'data' => Order::find($id)
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        if ($order) {
            $order->delete();

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus',
                'data' => null
            ], 200);
        } else {

            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }
}
