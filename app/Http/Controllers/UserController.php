<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        // $hash = DB::table('users')->pluck('password');
        // $rehash = Hash::needsRehash($hash);

        return view('admin.user.index', compact('user'), [
            'judul'=>'User'
        ]);
    }
    public function approve($id){
        $user = User::where('id', $id)->update([
            'approve'=>1
        ]);
        return redirect('/user');
    }
    public function reject($id){
        $user = User::where('id', $id)->update([
            'approve'=>0
        ]);
        return redirect('/user');
    }
}
