<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Lapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourtsController extends Controller
{
    public function __construct() 
    { 
        $this->middleware('auth'); 
    }
    
    public function index() 
    { 
        $courts = DB::table('courts')->get();
        
        return view('lapangan\index')->withCourts($courts);;
    }
    
    public function create()
    {
        return view('courts.create');
    }

    public function update()
    {
        return view('courts.update');
    }

    public function show()
    {
        return view('courts.show');
    }

    public function delete()
    {
        return view('courts.delete');
    }

    public function edit()
    {
        return view('courts.edit');
    }
}
