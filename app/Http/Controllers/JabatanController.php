<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
use DB;

class JabatanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = Jabatan::all();
        
        return view('jabatan.index', compact(['data']));

    }

    public function store(Request $request)
    {

        Jabatan::create([
            'nama' => Request()->input('nama'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function update(Request $request)
    {

        Jabatan::where('id', Request()->input('id'))->update([
            'nama' => Request()->input('nama'),
        ]);
        return redirect()->back()->with('success', 'Data berhasil diedit');
    }

    public function edit($id)
    {
        $data = Jabatan::findOrFail($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        Jabatan::destroy($id);

        return redirect()->back();
    }

    
}
