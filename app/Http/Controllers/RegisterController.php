<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $role = Role::where('name', 'User')->first();

        $store = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            // 'role_id' => $role->id,
            'password' => Hash::make($request->password),
        ]);

        if ($store) {
            return redirect()->route('login')->with('success', 'Register berhasil, silahkan login');
        } else {
            return redirect()->back()->with('error', 'Register gagal, silahkan coba lagi');
        }
    }
}