<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class registerController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|'
        ]);
        // enkripsi
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
        
        $request->session();
        return redirect()->to('/login')->with('success','Registration berhasil! please Login');
    }
}   
