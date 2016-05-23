<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() 
    { 
        $user = DB::table('users')->get();
        
        return view('user\admin')->withUser($user);;
    }
    
    public function create()
    {
        return view('user.create');
    }


    public function update()
    {
        return view('user.update');
    }

    public function show()
    {
        return view('user.show');
    }

    public function delete()
    {
        return view('user.delete');
    }

    public function edit()
    {
        return view('user.edit');
    }
}
