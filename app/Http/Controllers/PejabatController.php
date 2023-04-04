<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pejabat;

class PejabatController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   
        $data = Pejabat::all();

        return view('pejabat.index', compact(['data']));
    }

    public function update()
    {
      $data = Request()->validate([
        'jenis_id' => 'required',
        'nama' => 'required',
        'nip' => 'required',
        'jabatan' => 'required',
        'alamat' => 'required',
        'pangkat' => 'required',
        'no_sk' => 'required',
        'tgl_sk' => 'required',
      ]);

      Pejabat::where('id', Request()->input('id'))->update([
          'jenis_id' => $data['jenis_id'],
          'nama' => ucwords($data['nama']),
          'nip' => $data['nip'],
          'jabatan' => $data['jabatan'],
          'alamat' => $data['alamat'],
          'pangkat' => $data['pangkat'],
          'no_sk' => $data['no_sk'],
          'tgl_sk' => $data['tgl_sk']
      ]);
      return back()->with('msg', 'Data berhasil diperbarui');
    }
}
