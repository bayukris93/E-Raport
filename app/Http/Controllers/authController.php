<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class authController extends Controller
{
    public function home()
    {
        return view('auth.teslogin');
    }

    // public function __construct()
    // {
    //     $this->middleware('authController', ['except' => 'logout']);
    // }
    

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                        return redirect('dashboard');
                    }
                    return redirect('/')->with('message','Email atau Password Salah !!');
    }
        // $data = User::where('email',$request->email)->firstOrfail();
        // if($data){
        //     if(Hash::check($request->password, $data->password)){
        //         session(['berhasil_login' => true]);
        //         return redirect('dashboard');
        //     }
        // }
        // return redirect('/')->with('message','Email atau Password Salah !!');
}
