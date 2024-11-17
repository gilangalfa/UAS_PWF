<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    // public function index()
    // {
    //     return view('admin.login');
    // }

    public function loginCheck()
    {
        dd(Auth::check());
        // if (Auth::check()) {
        //     return redirect('admin');
        // }else{
        //     Auth::logout();
        //     return view('login');
        // }
    }
    public function login()
    {
        // dd(Auth::check());
        if (Auth::check()) {
            return redirect('admin');
        }else{
            
            return view('admin.login');
        }
    }

    public function loginAction(Request $request)
    {
        $data = [
            'name' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('admin');
        }else{
            Session::flash('error', 'Username or password is incorrect!');
            return redirect('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/'); // potential error
    }
}
