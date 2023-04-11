<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function indexprofil(){
        
        return view('user.profil');
    }
    public function pesananku(){
        
        return view('user.pesananku');
    }
}
