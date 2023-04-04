<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormDaftar;
use DB;

class FormController extends Controller
{

    
    public function index()
    {
        // $data = Arsip::all();
        
        return view('formdaftar');

    }

    public function list()
    {
        $data = FormDaftar::paginate(100);
        
        return view('formlist',compact('data'));

    }

    public function success()
    {
        // $data = Arsip::all();
        
        return view('formsuccess');

    }

    public function store(Request $request)
    {

        // FormDaftar::create([
        //     'nama' => Request()->input('nama'),
        //     'gender' => Request()->input('gender'),
        //     'nip' => Request()->input('nip'),
        //     'ttl' => Request()->input('ttl'),
        //     'alamat' => Request()->input('alamat'),
        //     'email' => Request()->input('email'),
        //     'telepon' => Request()->input('telepon'),
        //     'pendidikan' => Request()->input('pendidikan'),
        //     'studi' => Request()->input('studi'),
        //     'agama' => Request()->input('agama'),
        //     'istrisuami' => Request()->input('istrisuami'),
        //     'olahraga' => Request()->input('olahraga'),
        //     'informasi' => Request()->input('informasi'),
        //     'instansi' => Request()->input('instansi'),
        //     'jabatan' => Request()->input('jabatan'),
        //     'pangkat' => Request()->input('pangkat'),
        //     'alamat_kantor' => Request()->input('alamat_kantor'),
        //     'telepon_kantor' => Request()->input('telepon_kantor'),
        //     'fax' => Request()->input('fax'),
        //     'email_kantor' => Request()->input('email_kantor'),
        //     'pelatihan' => Request()->input('pelatihan'),
        //     'angkatan' => Request()->input('angkatan'),
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);

        $data = new \App\FormDaftar();
            $data->nama = $request->input('nama');
            $data->gender = $request->input('gender');
            $data->nip = $request->input('nip');
            $data->ttl = $request->input('ttl');
            $data->alamat = $request->input('alamat');
            $data->email = $request->input('email');
            $data->telepon = $request->input('telepon');
            $data->pendidikan = $request->input('pendidikan');
            $data->studi = $request->input('studi');
            $data->agama = $request->input('agama');
            $data->istrisuami = $request->input('istrisuami');
            $data->olahraga = $request->input('olahraga');
            $data->informasi = $request->input('informasi');
            $data->instansi = $request->input('instansi');
            $data->jabatan = $request->input('jabatan');
            $data->pangkat = $request->input('pangkat');
            $data->alamat_kantor = $request->input('alamat_kantor');
            $data->telepon_kantor = $request->input('telepon_kantor');
            $data->fax = $request->input('fax');
            $data->email_kantor = $request->input('email_kantor');
            $data->pelatihan = $request->input('pelatihan');
            $data->angkatan = $request->input('angkatan');
            $data->created_at = date('Y-m-d H:i:s');
            $data->updated_at = date('Y-m-d H:i:s');

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = $request->input('nip')."-".rand(1,1000).".".$ext;
            $file->move('uploads/photo',$newName);
            $data->photo = $newName;

            $file2 = $request->file('surattugas');
            $ext2 = $file2->getClientOriginalExtension();
            $newName2 = $request->input('nip')."-".rand(1,1000).".".$ext2;
            $file2->move('uploads/file',$newName2);
            $data->surattugas = $newName2;

        $data->save();

        return redirect('formsuccess')->with('success', 'Data berhasil dibuat');
    }

    
}
