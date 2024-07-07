<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index() {

        return view('login.index',[
            'title' => 'Login'
        ]);
    }

    public function authentication(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:225'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->with('loginError','Login gagal');
    }

    public function logout(){
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/login');
    
    }
}
