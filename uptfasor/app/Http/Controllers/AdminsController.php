<?php

namespace App\Http\Controllers;

use Auth;

use App\Petugas;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function __construct() 
    { 
        $this->middleware('auth'); 
    }
    
    public function index() 
    { 
        return view('petugas\index');
    }
}
