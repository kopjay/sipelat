<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyelenggara;
use DB;

class PenyelenggaraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function store(Request $request)
    {

        Penyelenggara::create([
            'pelatihan_id' => Request()->input('pelatihan_id'),
            'nama' => Request()->input('nama'),
            'kedudukan' => Request()->input('kedudukan'),
            'jabatan' => Request()->input('jabatan'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('msg', 'Data berhasil dibuat');
    }

    public function edit($id)
    {
        $data = Penyelenggara::findOrFail($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {

        Penyelenggara::where('id', Request()->input('id'))->update([
            'nama' => Request()->input('nama'),
            'kedudukan' => Request()->input('kedudukan'),
            'jabatan' => Request()->input('jabatan'),
        ]);
        return redirect()->back()->with('msg', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Penyelenggara::destroy($id);

        return redirect()->back()->with('msg', 'Data berhasil dihapus');;
    }
}
