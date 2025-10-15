<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
              'nama' => 'required | string',
        'email' => 'required | string',
        'pesan' => 'required | string',
        'foto' => 'nullable | image | mimes:jpg,jpeg,png|max:2048',
        'profesi' => 'require | string',
        ]);

        $filename = null;
        if ($request->hasFile('foto')) {
            $filename = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('user', $filename, 'public');
        }

        Message::create([
            'nama' => $validated['nama'],
            'foto' => $filename, // hanya simpan nama file
            
        ]);
    
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
    
}
