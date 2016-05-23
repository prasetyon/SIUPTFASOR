<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Reservasi;
    
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function __construct() 
    { 
        $this->middleware('auth'); 
    }
    
    public function index()
    {
        $email = Auth::user()->email;
        $reservasi = DB::table('reservasi')->get();
        
        $email = Auth::user()->email;
        if($email == 'admin@fasor.its.ac.id')
            return view('petugas.reservasi')->withReservasi($reservasi);
        else{
            $reserves = DB::table('reservasi')->where('email_penyewa', $email)->get();
            return view('reservasi.index')->withReservasi($reserves);
        }
    }
    
    public function store(Request $request)
    {
        $email = Auth::user()->email;
        $this->validate($request, [
            'id_lapangan' => 'required',
            'tanggal_sewa' => 'required',
            'waktu_mulai_sewa' => 'required',
            'waktu_selesai_sewa' => 'required'
        ]);
        
        // Mengambil semua input dan memasukkan ke dalam variabel $input
        $input = $request->all();
        
        // Menyimpan ke dalam database dengan menggunakan Eloquent::create
        // Reservasi::create($input);
        
        // use DB
        DB::table('reservasi')->insert(
            ['id_lapangan' => $input['id_lapangan'],
             'email_penyewa' => $email, 
             'tanggal_sewa' => $input['tanggal_sewa'],
             'waktu_mulai_sewa' => $input['waktu_mulai_sewa'],
             'waktu_selesai_sewa' => $input['waktu_selesai_sewa']]
        );
        
        // redirect ke halaman sebelumnya.
        return redirect()->back();
    }

    public function create()
    {
        return view('reservasi.create');
    }


    public function update()
    {
        return view('reservasi.update');
    }

    public function show()
    {
        return view('reservasi.show');
    }

    public function delete()
    {
        return view('reservasi.destroy');
    }

    public function edit()
    {
        return view('reservasi.edit');
    }
}
