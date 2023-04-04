<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Jabatan;
use App\Pelatihan;
use App\Jadwal;
use App\Anggaran;
use App\Evaluasi;
use App\Pejabat;
use App\Dipa;
use App\Penyelenggara;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $pelatihanPKN = Pelatihan::where('pelatihan_header_id', 1)->get();
        $pelatihanPKA = Pelatihan::where('pelatihan_header_id', 2)->get();
        $jadwal = Jadwal::all();
        $anggaran = Anggaran::all();
        $user = User::Where('id', '!=', 1)->get();
        return view('chart', compact('pelatihanPKN', 'pelatihanPKA','jadwal', 'user','anggaran'));
    }


    public function pelatihan()
    {   
        $pelatihanPKN = Pelatihan::where('pelatihan_header_id', 1)->get();
        $pelatihanPKA = Pelatihan::where('pelatihan_header_id', 2)->get();
        $jadwal = Jadwal::orderBy('tgl', 'ASC')->get();
        $anggaran = Anggaran::all();
        $user = User::Where('id', '!=', 1)->orderBy('name', 'asc')->get();
        return view('dashboard', compact('pelatihanPKN', 'pelatihanPKA','jadwal', 'user','anggaran'));
    }

    public function menu()
    {
        return view('menu.index');
    }

    public function pedomansop()
    {
        return view('pedomansop');
    }

    public function homeDefault()
    {
        return view('dashboard');
    }

    public function sop()
    {
        return view('sop');
    }

    public function resiko()
    {
        return view('resiko');
    }

    public function tatausaha()
    {
        return view('tatausaha');
    }

    public function listUser()
    {
        $user = User::Where('id', '!=', 1)->orderBy('name','asc')->get();
        $jabatan = Jabatan::all();
        return view('auth.listUser', compact('user','jabatan'));
    }

    public function storeUser(Request $request)
    {

        User::create([
            'name' => Request()->input('name'),
            'email' => Request()->input('email'),
            'password' => Hash::make(Request()->input('password')),
            'jabatan' => Request()->input('jabatan'),
            'nip' => Request()->input('nip'),
            'pajak' => Request()->input('pajak'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function editUser($id)
    {
        $data = User::findOrFail($id);
        return response()->json($data);
    }

    public function updateUser(Request $request)
    {

        User::where('id', Request()->input('user_id'))->update([
            'name' => Request()->input('name'),
            'email' => Request()->input('email'),
            'jabatan' => Request()->input('jabatan'),
            'nip' => Request()->input('nip'),
            'pajak' => Request()->input('pajak'),
            'password' => Hash::make(Request()->input('password')),
        ]);
        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    

    public function skpdf($id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        $data = Jadwal::where('pelatihan_id', $id)->get();
        $dipa = Dipa::findOrFail(1);
        $jadwal = Jadwal::where('pelatihan_id', $id)->where('async', 0)->orderBy('user_id', 'desc')->get();
        $penyelenggara = Penyelenggara::where('pelatihan_id', $id)->get();

        $pejabatKPP = Pejabat::Where('jenis_id', 1)->firstOrFail();
        $pejabatPPK = Pejabat::Where('jenis_id', 2)->firstOrFail();
        $pejabatBP = Pejabat::Where('jenis_id', 3)->firstOrFail();

        $pdf = PDF::loadView('pdf.tespdf', compact(['pelatihan', 'data', 'dipa', 'jadwal', 'pejabatPPK','pejabatBP','pejabatKPP','penyelenggara']),
        [], 
        [
          'title' => 'SK', 
          'format' => 'FOLIO',
        ]);
        return $pdf->stream('tes.pdf');
    }
    
    public function jadwal($id)
    {
        $data = Jadwal::where('pelatihan_id', $id)->get();
        $pelatihan = Pelatihan::findOrFail($id);

        $pdf = PDF::loadView('pdf.jadwal', compact(['data', 'pelatihan']));
        return $pdf->stream('jadwal.pdf');
    }
    

    public function kartukendaliOld($id)
    {
        $user = User::Where('id', '!=', 1)->orderBy('name','asc')->get();
        $jabatan = Jabatan::all();

        return view('kartukendali', compact('user','jabatan'));
    }

    public function kartukendali($month, $year, $id)
    {   
        $user = User::findOrFail($id);

        $month_fix = strtotime($month.'/1/'.$year);

        $jadwal = Jadwal::where('user_id', $id)->where('async', 0)->whereMonth('tgl', Carbon::parse($month_fix)->month)->orderBy('pelatihan_id', 'ASC')->get();
        $jadwal_async = Jadwal::where('user_id', $id)->where('async', 1)->whereMonth('tgl', Carbon::parse($month_fix)->month)->orderBy('pelatihan_id', 'ASC')->take(7)->get();
        $pejabatKPP = Pejabat::Where('jenis_id', 1)->firstOrFail();

        $pdf = PDF::loadView('pdf.kartu_kendali', compact(['user', 'jadwal', 'jadwal_async','pejabatKPP']));
        return $pdf->stream('kartukendali.pdf');
    }

    public function honorpdf($month, $year, $id)
    {
        $user = User::findOrFail($id);
        $pejabatKPP = Pejabat::Where('jenis_id', 1)->firstOrFail();
        $pejabatPPK = Pejabat::Where('jenis_id', 2)->firstOrFail();
        $pejabatBP = Pejabat::Where('jenis_id', 3)->firstOrFail();


        $month_fix = strtotime($month.'/1/'.$year);

        $jadwal = Jadwal::where('user_id', $id)->where('async',0)->whereMonth('tgl', Carbon::parse($month_fix)->month)->orderBy('pelatihan_id', 'ASC')->get();
        $jadwal_async = Jadwal::where('user_id', $id)->where('async',1)->whereMonth('tgl', Carbon::parse($month_fix)->month)->orderBy('pelatihan_id', 'ASC')->take(7)->get();


        $pdf = PDF::loadView('pdf.honorpdf', compact(['user', 'jadwal','jadwal_async','pejabatPPK','pejabatBP']), 
        [], 
        [ 
          'title' => 'Honor', 
          'format' => 'FOLIO',
          'orientation' => 'L'
        ]);
        return $pdf->stream('honor.pdf');
    }
}
