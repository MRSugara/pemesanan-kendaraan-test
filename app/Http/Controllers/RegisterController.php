<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        $role = Role::all();
        return view('auth.registrasi',compact('divisi','role'));
    }

    public function store(Request $request)
    {



        $store = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role,
            'divisi_id'=>$request->divisi,
            'password' => Hash::make($request->password),
        ]);

        if ($store) {
            return redirect()->route('login')->with('success', 'Register berhasil, silahkan hubungi admin');
        } else {
            return redirect()->back()->with('error', 'Register gagal, silahkan coba lagi');
        }
    }
}
