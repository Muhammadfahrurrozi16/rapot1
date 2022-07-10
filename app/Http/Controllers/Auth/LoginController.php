<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() 
    { 
    return view('back.auth.login'); 
    } 
    public function authentikasi(Request $request) 
    { 
    $kredensial = $request->validate([ 
    'email' => 'required|email', 
    'password' => 'required', 
    ]); 
    if (Auth::attempt($kredensial)) { 
    $request->session()->regenerate(); 
    return redirect('/dashboard'); 
    } 
    return back()->with('loginError', 'Login Gagal !'); 
    }
    public function loginout() 
    { 
    Auth::logout(); 
    request()->session()->invalidate(); 
    request()->session()->regenerateToken(); 
    return redirect('/'); 
    }
    public function signup() 
    { 
    return view('back.auth.register'); 
    }
    public function register(Request $request) 
    { 
    $data = $request->validate([ 
    'name' => ['required', 'min:3', 'max:255', 'unique:users'], 
    'email' => 'required|email|unique:users', 
    'password' => 'required|min:5|max:255', 
    ]); 
    // enkripsi password, 2 cara berikut sama
    //$data['password'] = bcrypt($data['password']);
    $data['password'] = Hash::make($data['password']); 
    $tambah = DB::table('users')->insert($data); 
    if ($tambah) { 
    // $request->session()->flash('success', 'Registration Successfull!, Please Login');
    // return redirect('/login');
    // atau
    return redirect('/login')->with('success', 'Registration Successfull!, Please Login'); 
    } 
    }

}
