<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use DB;

class JadwalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function store(Request $request)
    {

        Jadwal::create([
            'pelatihan_id' => Request()->input('pelatihan_id'),
            'mata_pelatihan' => Request()->input('mata_pelatihan'),
            'async' => Request()->input('async'),
            'tgl' => Request()->input('tgl'),
            'waktu_mulai' => Request()->input('waktu_mulai'),
            'waktu_akhir' => Request()->input('waktu_akhir'),
            'type' => Request()->input('type'),
            'jp' => Request()->input('jp'),
            'narasumber' => Request()->input('narasumber'),
            'user_id' => Request()->input('narasumber'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('msg', 'Data berhasil dibuat');
    }

    public function editJadwal($id)
    {
        $data = Jadwal::findOrFail($id);
        return response()->json($data);
    }

    public function updateJadwal(Request $request)
    {

        Jadwal::where('id', Request()->input('jadwal_id'))->update([
            'pelatihan_id' => Request()->input('pelatihan_id'),
            'mata_pelatihan' => Request()->input('mata_pelatihan'),
            'async' => Request()->input('async'),
            'tgl' => Request()->input('tgl'),
            'waktu_mulai' => Request()->input('waktu_mulai'),
            'waktu_akhir' => Request()->input('waktu_akhir'),
            'type' => Request()->input('type'),
            'jp' => Request()->input('jp'),
            'narasumber' => Request()->input('narasumber'),
            'user_id' => Request()->input('narasumber'),
        ]);
        return redirect()->back()->with('msg', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);

        return redirect()->back()->with('msg', 'Data berhasil dihapus');;
    }
}
