<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index()
    {
        
        return view('v_public.register');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|max:255',
            
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Anda berhasil registrasi, silahkan lakukan login');
    }
}
