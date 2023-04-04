<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SD;
use DB;

class SDController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index($id)
    {
        $data = SD::where('id_jenis','=', $id)->get();
        
        return view('sd.index', compact(['data']));

    }

    public function logistik()
    {
        return view('bidanglogistik');
    }

    public function operasi()
    {
        return view('bidangoperasi');
    }

    public function logistikresiko()
    {
        return view('bidanglogistikresiko');
    }

    public function operasiresiko()
    {
        return view('bidangoperasiresiko');
    }

    public function store(Request $request)
    {

        $data = new \App\SD();
        $data->nama = $request->input('nama');
        $data->no_sop = $request->input('no_sop');
        $data->no_revisi = $request->input('no_revisi');
        $data->tgl_revisi = $request->input('tgl_revisi');
        $data->id_jenis = $request->input('id_jenis');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('nama')."".rand(1,100).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function download($filename) {
        $file_path = 'uploads/file/'.$filename;

        return response()->download($file_path);
    }

    public function destroy($id)
    {
        SD::destroy($id);

        return redirect()->back();
    }

    
}
