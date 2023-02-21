<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function user_register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->mobile = $request->phone;
        $users->status = false;
        $users->save();

        return response()->json(['success' => true]);
    }

}
