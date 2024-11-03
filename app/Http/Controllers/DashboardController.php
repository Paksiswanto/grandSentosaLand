<?php

namespace App\Http\Controllers;


use App\Models\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('welcome');
        }else{
            return redirect()->route('login')->with('error', 'Wrong email or password');
        }
    }

    public function home(){
        $photos = photo::all();

        return view('admin.index', compact('photos'));
    }
}
