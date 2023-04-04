<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelatihan;
use DB;

class PelatihanController extends Controller
{
    public function store(Request $request)
    {

        Pelatihan::create([
            'pelatihan_header_id' => Request()->input('pelatihan_header_id'),
            'nama' => Request()->input('nama'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function destroy($id)
    {
        Pelatihan::destroy($id);

        return redirect()->back();
    }
}
