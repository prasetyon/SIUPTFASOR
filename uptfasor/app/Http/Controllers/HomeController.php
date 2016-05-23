<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // IF USER, GO TO USER PAGE
    public function index()
    {
        $email = Auth::user()->email;
        if($email == 'admin@fasor.its.ac.id')
            return view('petugas\index');
        else
            return view('user\index');
    }
}
