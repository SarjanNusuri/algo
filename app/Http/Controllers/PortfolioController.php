<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function index(){
            
    $portfolio = Portfolio::all();
        return view('admin.portofolio',compact('portfolio'));
}

    function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'gambar ' => 'required|image|mimes:jpg,png,jpeg|max:2048' 
        ]);
        
            $filename = null;
            if ($request->hasFile('gambar')) {
                
                $filename = time() . '_'.$request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->storeAs('portfolio',$filename,'public');
            }

            Portfolio::create($validated);
               
           
            return redirect()->route('portofolio.store')->with('success','portfolio berhasil ditambahkan');
        
    } 
}
