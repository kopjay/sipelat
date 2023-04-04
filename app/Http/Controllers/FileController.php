<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;

class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index($id)
    {
        $data = File::where('id_jenis','=', $id)->get();
        
        return view('file.index', compact(['data']));

    }

    public function store(Request $request)
    {

        $data = new \App\File();
        $data->nama = $request->input('nama');
        $data->id_jenis = $request->input('id_jenis');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('nama')."".rand(1,100).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    // public function download($filename) {
    //     $file_path = 'uploads/file/'.$filename;

    //     return response()->download($file_path);
    // }

    public function download($filename, $nama) {
        $file_path = 'uploads/file/'.$filename;
        $extension = pathinfo(storage_path('uploads/file/'.$filename), PATHINFO_EXTENSION);

        if (ob_get_length()) ob_end_clean();
        $nm = $nama." .".$extension;

        return response()->download($file_path, $nm);
    }

    public function destroy($id)
    {
        File::destroy($id);

        return redirect()->back();
    }

    
}
