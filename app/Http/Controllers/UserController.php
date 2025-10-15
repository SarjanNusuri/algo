<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\Proyek;

class UserController
{
  
   
    function index() //Overview
    {
        $service = Services::all();
        $portfolios = Portfolio::all();
       $proyek = Proyek::where('proses','done')->count();
       $rating = Proyek::where('rating','sangat puas')->count();
        $client = Message::all();
        return view('user.index',compact('portfolios','service','proyek','rating','client'));
    }

    function store(Request $request){
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        $ipAddress = $request->ip();
        Proyek::create([
            'ip' => $ipAddress,
            'nama' => $validated['nama'],
            'jenis'=> $validated['jenis'],
            'harga'=> $validated['harga'],
            'proses' => 'pending',
        ]);
        $nama = $validated['nama'];
        $jenis = $validated['jenis'];
        $nomor = "6285756986971";
        $pesan = urlencode("Halo,saya tertarik dengan layanan $jenis , $nama");

        return redirect("https://wa.me/$nomor?text=$pesan");
    }
}


