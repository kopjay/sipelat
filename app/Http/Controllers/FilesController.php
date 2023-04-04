<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileNotaDinas;
use App\FileSpt;
use App\FileDokumen;
use App\FileSpm;
use DB;

class FilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        // $data = Barang::all();
        
        // return view('barang.index', compact(['data']));

    }

    public function notaDinasStore(Request $request)
    {

        $data = new \App\FileNotaDinas();
        $data->nama = $request->input('nama');
        $data->spm_id = $request->input('spm_id');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('nama')."".rand(1,100).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function sptStore(Request $request)
    {

        $data = new \App\FileSpt();
        $data->nama = $request->input('nama');
        $data->spm_id = $request->input('spm_id');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('nama')."".rand(1,100).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function dokumenStore(Request $request)
    {

        $data = new \App\FileDokumen();
        $data->nama = $request->input('nama');
        $data->spm_id = $request->input('spm_id');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('nama')."".rand(1,100).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function spmStore(Request $request)
    {

        $data = new \App\FileSpm();
        $data->nama = $request->input('nama');
        $data->spm_id = $request->input('spm_id');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('nama')."".rand(1,100).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    // public function download($filename, $nama) {
    //     $file_path = 'uploads/file/'.$filename;

    //     return response()->download($file_path, $nama);
    // }

    public function download($filename, $nama) {
        $file_path = 'uploads/file/'.$filename;
        $extension = pathinfo(storage_path('uploads/file/'.$filename), PATHINFO_EXTENSION);

        if (ob_get_length()) ob_end_clean();
        $nm = $nama." .".$extension;

        return response()->download($file_path, $nm);
    }

    
}
