<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index', compact('user'), [
            'judul'=>'user'
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
