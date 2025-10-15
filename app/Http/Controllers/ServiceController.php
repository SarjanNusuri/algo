<?php namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Services::all();
        return view('admin.layanan',compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'user_id'      => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'description'  => 'nullable|string',
            'price'        => 'required|integer|min:0',
            'diskon'        => 'required|integer|min:0',
            
        ]);

        Services::create($validated);

        return redirect()->route('layananadmin')->with('success', 'Service berhasil ditambahkan!');
    }
    
    public function destroy($id){
        $service = Services::findOrFail($id);
        $service->delete();
        
        return redirect()->route('layananadmin')->with('success', 'Service berhasil dihapus!');

    }

    public function update(Request $request ,$id) {
        
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'jenis'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|integer|min:0',
            'diskon'       => 'required|min:0',
            'status'      => 'required|in:belum disetujui,setuju',
        ]);
        
        $service = Services::findOrFail($id);
        $service->update($validated);

        return redirect()->back()->with('success','Layanan berhasil diperbarui!');
    }
    public function edit($id){
        $service = Services::findOrFail($id);
        return response()->json($service);
        // return view('layananadmin',compact('service'));
    }
}
