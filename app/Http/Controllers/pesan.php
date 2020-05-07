<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pesan extends Controller
{
    public function booking(Request $request){
        DB::table('table_pesan')->insert([
            'Nama' => $request -> Nama,
            'Alamat' => $request -> Alamat,
            'Email' => $request -> Email,
            'Tanggal_Booking' => $request -> Tanggal_Booking,
            'Toko' => $request -> Toko,
            'Tipe_Pesta' => $request -> Tipe_Pesta,
        ]);
        return redirect('/');
    }
}