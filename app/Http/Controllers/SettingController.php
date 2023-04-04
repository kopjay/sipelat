<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dipa;

class SettingController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data = Dipa::findOrFail(1);

        return view('setting.index', compact(['data']));
    }

    public function update(Request $request)
    {

        Dipa::where('id', 1)->update([
            'no_dipa' => Request()->input('no_dipa'),
            'tahun_anggaran' => Request()->input('tahun_anggaran'),
            'tanggal' => Request()->input('tanggal'),
        ]);
        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }
}
