
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .border table, .faktur .table tr, .border td{
            border:1px solid black;
            border-collapse: collapse;
        }

        body{
            font-family: 'bookos', sans-serif;
        }

        .page-break {
            page-break-after: always;
        }

        /* @font-face {
            font-family: 'Your custom font name';
            src: url({{ storage_path('fonts\your-custom-font.ttf') }}) format("truetype");
            font-weight: 400; // use the matching font-weight here ( 100, 200, 300, 400, etc).
            font-style: normal; // use the matching font-style here
        } */
    </style>
</head>
<body style="font-size:14px; ">
    <div style="text-align:center; font-size:14px; ">
        <br><br><br><br><br><br><br><br>
        KEPUTUSAN KEPALA PUSAT PENGEMBANGAN SUMBER DAYA MANUSIA<br>
        APARATUR PERHUBUNGAN<br>
    </div>
    <br>
    <div style="text-align:center; font-size:14px; ">
        Nomor : SK. &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tahun 2023
    </div>
    <br>
    <div style="text-align:center; font-size:14px; ">
        TENTANG
    </div>
    <div style="text-align:center; font-size:14px;  padding:0px 340px;">
        <br>
         {{$pelatihan->nama}} 
        <br>
    </div>
    <br>
    <div style="text-align:center; font-size:14px; ">
        DENGAN RAHMAT TUHAN YANG MAHA ESA
    </div>
    <br>
    <div style="text-align:center; font-size:14px; ">
        KEPALA PUSAT PENGEMBANGAN SUMBER DAYA MANUSIA 
            <br> APARATUR PERHUBUNGAN
    </div>
    <br>
    <div style="font-size:14px; ">
        <table style="text-align:left; line-height:1.3; table-layout:fixed; width:100%;vertical-align:top;text-align:justify;" border="0">
            <tr>
                <td width="160px">Menimbang</td>
                <td width="20px" style="text-align:center;">:</td>
                <td>a.</td>
                <td width="470px">
                    bahwa dalam rangka pelaksanaan kegiatan {{$pelatihan->nama}} yang anggarannya telah dialokasikan dalam DIPA Pusat Pengembangan Sumber Daya Manusia Aparatur Perhubungan Tahun Anggaran {{$dipa->tahun_anggaran}}, dipandang perlu menetapkan Tim Penyelenggara, Penceramah, pengajar, Pembimbing (Coach), Penguji, Instruktur, Pembimbing (Mentor), dan Peserta {{$pelatihan->nama}};
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>b.</td>
                <td width="470px">
                    bahwa Pejabat/Pegawai Negeri Sipil yang memenuhi kriteria dan kompetensi, dapat ditunjuk sebagai Tim Penyelenggara, Penceramah, Narasumber, Pengampu Materi/ Tutor, Penguji, Coach  dan Peserta  {{$pelatihan->nama}};
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>c.</td>
                <td width="470px">
                    bahwa berdasarkan bahwa berdasarkan pertimbangan sebagaimana huruf a dan huruf b, perlu menetapkan Keputusan Kepala Pusat Pengembangan Sumber Daya Manusia Aparatur Perhubungan tentang  {{$pelatihan->nama}};
                </td>
            </tr>
        </table>
        <br>
        <table style="text-align:left; line-height:1.3; table-layout:fixed; width:100%;margin-top:5px;vertical-align:top;text-align:justify;" border="0">
            
            <tr>
                <td width="160px">Mengingat</td>
                <td width="20px" style="text-align:center;">:</td>
                <td>1.</td>
                <td width="470px">
                    Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 6, Tambahan Lembaran Negara Republik Indonesia Nomor 5494);
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>2.</td>
                <td width="470px">
                    Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2017 Nomor 63) sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 17 Tahun 2020 tentang Perubahan atas Peraturan Pemerintah Nomor 11 tahun 2017 Tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2020 Nomor 68);
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>3.</td>
                <td width="470px">
                    Peraturan Pemerintah Nomor 51 Tahun 2012 tentang Sumber Daya Manusia Bidang Transportasi, (Lembaran Negara Republik Indonesia Tahun 2012 Nomor 104, Tambahan Lembaran Negara Republik Indonesia Nomor 5310);
                </td>
            </tr>
        </table>

        <div class="page-break"></div>

        <table style="text-align:left; line-height:1.3; table-layout:fixed; width:100%;margin-top:5px;vertical-align:top;text-align:justify;" border="0">
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>4.</td>
                <td width="470px">
                    Peraturan Presiden RI Nomor 23 Tahun 2022 tentang Kementerian Perhubungan (Lembaran Negara Republik Indonesia Tahun 2022 Nomor 33) ;
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>5.</td>
                <td width="470px">
                    Peraturan Menteri Keuangan Nomor 60/PMK.02/2021 tentang Standar Biaya Masukan Tahun Anggaran 2022 (Berita Negara Republik Indonesia Tahun 2021 Nomor 658);
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>6.</td>
                <td width="470px">
                    Peraturan Menteri Perhubungan Nomor PM. 17 Tahun 2021 tentang Organisasi dan Tata Kerja Kementerian Perhubungan (Berita Negara Republik Indonesia Tahun 2021 Nomor 815);
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>7.</td>
                <td width="470px">
                    Peraturan Lembaga Administrasi Negara Republik Indonesia Nomor 10 Tahun 2021 tentang Perubahan atas Peraturan Lembaga Administrasi Negara Nomor 1 Tahun 2021 tentang Pelatihan Dasar Calon Pegawai Negeri Sipil;
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>8.</td>
                <td width="470px">
                    Peraturan Kepala Lembaga Administrasi Negara Nomor 3 Tahun 2010 tentang Petunjuk Teknis Jabatan Fungsional Widyaiswara dan Angka Kreditnya;
                </td>
            </tr>
            <tr>
                <td width="160px"></td>
                <td width="20px" style="text-align:center;"></td>
                <td>9.</td>
                <td width="470px">
                    Peraturan Kepala Lembaga Administrasi Negara Nomor 2 Tahun 2022 tentang Rincian Anggaran Biaya Pelatihan Dasar.
                </td>
            </tr>
        </table>

        <table style="text-align:left; line-height:1.5; table-layout:fixed; width:100%;margin-top:10px;vertical-align:top;text-align:justify; border-spacing:1em;" border="0">
            <tr>
                <td width="160px">Memperhatikan</td>
                <td width="20px" style="text-align:center;">:</td>
                {{-- <td>1.</td> --}}
                <td width="470px">
                    Daftar Isian Pelaksanaan Anggaran (DIPA) Pusat Pengembangan SDM Aparatur Perhubungan Tahun Anggaran {{$dipa->tahun_anggaran}} Nomor: SP {{$dipa->no_dipa}} Tanggal {{\Carbon\Carbon::parse($dipa->tanggal)->isoFormat('D MMMM Y')}}.
                </td>
            </tr>
        </table>

        <br>
        <br>
        <br>
        <div style="text-align:center; font-size:14px; ">
            MEMUTUSKAN
        </div>

        <table style="text-align:left; line-height:1.5; table-layout:fixed; width:100%;margin-top:10px;vertical-align:top;text-align:justify;" border="0">
            <tr>
                <td width="160px">Menetapkan</td>
                <td width="20px" style="text-align:center;">:</td>
                {{-- <td>1.</td> --}}
                <td width="470px">
                    KEPUTUSAN KEPALA PUSAT PENGEMBANGAN SUMBER DAYA MANUSIA APARATUR PERHUBUNGAN TENTANG {{$pelatihan->nama}}
                </td>
            </tr>
            <tr>
                <td width="160px">PERTAMA</td>
                <td width="20px" style="text-align:center;">:</td>
                {{-- <td>1.</td> --}}
                <td width="470px">
                   {{$pelatihan->nama}} mulai tanggal 30 Agustus sampai dengan 03 Desember 2021 dengan jumlah peserta sebanyak 40 (empat puluh) orang
                </td>
            </tr>
            <tr>
                <td width="160px">KEDUA</td>
                <td width="20px" style="text-align:center;">:</td>
                {{-- <td>1.</td> --}}
                <td width="470px">
                    Menunjuk para Pejabat/ Pegawai untuk ditetapkan sebagai Tim Penyelenggara, Penceramah, Narasumber, Pengampu Materi/ Tutor, Penguji, Coach dan Peserta {{$pelatihan->nama}} yang namanya tercantum pada lajur 2 (dua) Lampiran I dan Lampiran II yang merupakan bagian tidak terpisahkan dari Keputusan Kepala Pusat Pengembangan Sumber Daya Manusia Aparatur Perhubungan ini.
                </td>
            </tr>
            <tr>
                <td width="160px">KETIGA</td>
                <td width="20px" style="text-align:center;">:</td>
                {{-- <td>1.</td> --}}
                <td width="470px">
                    Biaya yang diperlukan dalam penyelenggaraan Pendidikan dan Pelatihan sebagaimana dimaksud dalam Diktum PERTAMA dibebankan pada Daftar Isian Pelaksanaan Anggaran (DIPA) Pusat Pengembangan Sumber Daya Manusia Aparatur Perhubungan Tahun Anggaran {{$dipa->tahun_anggaran}} Nomor: SP {{$dipa->no_dipa}} Tanggal {{\Carbon\Carbon::parse($dipa->tanggal)->isoFormat('D MMMM Y')}} sesuai peraturan perundangan yang berlaku. Besaran biaya Penyelenggaraan Pendidikan : <br>
                    <ul>
                        <li> Honor penceramah Pejabat Setingkat Menteri Rp 1.700.000,- /OJ;</li>
                        <li> Honor penceramah Eselon I Rp 1.400.000,- /OJ;</li>
                        <li> Honor penceramah Pejabat Eselon II Rp 1.000.000,- /OJ;</li>
                        <li> Honor Pejabat Eselon III  Rp 900.000,-/OJ; </li>
                        <li> Honor Tutor/Pengajar Dalam Satker Rp 200.000,- /JP; </li>
                        <li> Honor Tutor/Pengajar Luar Satker Rp 300.000,- /JP; </li>
                        <li> Honor Coach Dalam Satker Rp 200.000,-/ JP;</li>
                        <li> Honor Coach Luar Satker Rp 300.000,-/ JP;</li>
                        <li> Honor Penguji Dalam Satker Rp 200.000,-/Mata Uji;</li>
                        <li> Honor Penguji Luar Satker Rp 300.000,-/Mata Uji;</li>
                        <li> Honor Mentor Luar Satker Rp 300.000,-/JP;</li>
                        <li> Honor Instruktur Senam Rp. 400.000,-/JP.</li>

                    </ul>
                </td>
            </tr>
            <tr>
                <td width="160px">KEEMPAT</td>
                <td width="20px" style="text-align:center;">:</td>
                {{-- <td>1.</td> --}}
                <td width="470px">
                    Keputusan ini berlaku sejak tanggal ditetapkan dan apabila dikemudian hari terdapat kekeliruan akan diperbaiki sebagaimana mestinya.
                </td>
            </tr>
        </table>


        <table style="text-align:left; line-height:1.5; table-layout:fixed; width:100%; margin-top:50px; vertical-align:top;padding:0px 40px;" border="0">
            <tr>
                <td width="39%"></td>
                <td width="20%"></td>
                <td width="41%">
                    Ditetapkan di : Bogor <br>
                    Pada tanggal :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2023
                </td>
            </tr>
            <hr>
        </table>

        <table style="line-height:1.5; table-layout:fixed; width:100%; text-align:left; vertical-align:top;padding:0px 30px; border-spacing:1em;" border="0">
            
            <tr>
                <td width="38%"></td>
                <td width="20%"></td>
                <td width="42%">
                    KEPALA PUSAT PENGEMBANGAN<br>
                    SDM APARATUR PERHUBUNGAN
                </td>
            </tr>
            <tr>
                <td style="height:80px;"></td>
                <td style="height:80px;"></td>
                <td style="height:80px;"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                     <u>{{$pejabatKPP->nama}}</u><br>
                    NIP. {{$pejabatKPP->nip}}
                </td>
            </tr>
        </table>
        <br>
        <u>SALINAN Keputusan ini disampaikan kepada :</u>
        <table style="text-align:left; line-height:1.5; table-layout:fixed; width:100%;vertical-align: top; text-align: justify;" border="0">
            <tr>
                <td width="30px" style="text-align: center;">1. </td>
                <td width="470px" colspan="2">
                    Direktur jenderal Anggaran Kementerian Keuangan;
                </td>
            </tr>
            <tr>
                <td width="30px" style="text-align: center;">2. </td>
                <td width="470px" colspan="2">
                    Inspektur Jenderal Kementerian Perhubungan;
                </td>
            </tr>
            <tr>
                <td width="30px" style="text-align: center;">3. </td>
                <td width="470px" colspan="2">
                     Kepala Badan Pengembangan Sumber Daya Manusia Perhubungan;
                </td>
            </tr>
            <tr>
                <td width="30px" style="text-align: center;">4. </td>
                <td width="470px" colspan="2">
                    Kepala KPPN di Bogor;
                </td>
            </tr>
            <tr>
                <td width="30px" style="text-align: center;">5. </td>
                <td width="470px" colspan="2">
                    Pejabat Pembuat Komitmen Belanja Barang Pusat Pengembangan Sumber Daya Manusia Aparatur Perhubungan.
                </td>
            </tr>
            
        </table>
    </div>
    
    {{-- page 4 --}}
    <div style="font-size:14px; page-break-before:always;">
        
        <table style="text-align:left; font-size:14px; line-height:1.0; table-layout:fixed; width:100%;  border-bottom:1px solid black; margin-left: 170px" border="0">
            <tr>
                <td width="10px">Lampiran I</td>
                <td width="5px">:</td>
                <td width="250px">Keputusan Kepala Pusat Pengembangan SDM Aparatur Perhubungan</td>
            </tr>
            <tr>
                <td width="10px">Nomor</td>
                <td width="5px">:</td>
                <td width="250px">SK. </td>
            </tr>
            <tr>
                <td width="10px">Tanggal</td>
                <td width="5px">:</td>
                <td width="250px"></td>
            </tr>
            <tr>
                <td width="10px"></td>
                <td width="5px"></td>
                <td width="250px"></td>
            </tr>
        </table>

        <br>
        <div style="text-align:center; font-size:14px; ">
            <br>
            DAFTAR NAMA TIM PENYELENGGARA<br>
            {{$pelatihan->nama}}<br>
        </div>
        
        <table class="border" style="text-align:left; font-size:14px; line-height:1.4; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
            <thead>
                <tr style="font-weight: bold">
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">No</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 25%;font-weight:bold;">Kedudukan Dalam Tim</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 30%;font-weight:bold;">Nama Anggota Panitia</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 40%;font-weight:bold;">Jabatan</td>
                </tr>

            </thead>

            <?php $pNo = 1; ?>
            @forelse($penyelenggara as $p)
            <tr>
                <td style="text-align:center;">{{$pNo++}}.</td>
                <td style="padding:5px;">{{$p->kedudukan}}</td>
                <td style="padding:5px;">
                    {{strtoupper($p->nama)}}
                </td>
                <td style="padding:5px;">
                    {{$p->jabatan}}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align: center">Data Kosong</td>
            </tr>
            @endforelse
    
          </table>
          <br>
          <table style="line-height:1.5; table-layout:fixed; width:100%; text-align:left; vertical-align:top;padding:0px 30px; border-spacing:1em;" border="0">
            <tr>
                <td width="38%"></td>
                <td width="20%"></td>
                <td width="42%">
                    KEPALA PUSAT PENGEMBANGAN<br>
                    SDM APARATUR PERHUBUNGAN
                </td>
            </tr>
            <tr>
                <td style="height:80px;"></td>
                <td style="height:80px;"></td>
                <td style="height:80px;"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                     <u> {{$pejabatKPP->nama}} </u><br>
                    NIP. {{$pejabatKPP->nip}}
                </td>
            </tr>
        </table>
    </div>

    {{-- page 5 --}}

    <div style="font-size:14px; page-break-before:always;">
        
        <table style="text-align:left; font-size:14px; line-height:1.0; table-layout:fixed; width:100%;  border-bottom:1px solid black; margin-left: 170px" border="0">
            <tr>
                <td width="10px">Lampiran II</td>
                <td width="5px">:</td>
                <td width="250px">Keputusan Kepala Pusat Pengembangan SDM Aparatur Perhubungan</td>
            </tr>
            <tr>
                <td width="10px">Nomor</td>
                <td width="5px">:</td>
                <td width="250px">SK. </td>
            </tr>
            <tr>
                <td width="10px">Tanggal</td>
                <td width="5px">:</td>
                <td width="250px"></td>
            </tr>
            <tr>
                <td width="10px"></td>
                <td width="5px"></td>
                <td width="250px"></td>
            </tr>
        </table>

        <br>
        <div style="text-align:center; font-size:14px; ">
            <br>
            DAFTAR NAMA PENCERAMAH, PENGAJAR, PEMBIMBING (COACH), PENGUJI, DAN INSTRUKTUR<br>
            {{$pelatihan->nama}}<br>
        </div>
        <br>
        <table class="border" style="text-align:left; font-size:14px; ; line-height:1.4; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
            <thead>
                <tr style="font-weight: bold">
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 7%;font-weight:bold;">NO</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">NAMA</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 25%;font-weight:bold;">INSTANSI</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 38%;font-weight:bold;">MATA PELAJARAN</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 10%;font-weight:bold;">JP/OJ</td>
                </tr>

            </thead>
            <?php $i = 1; $temp = 0; $a = 1; ?>
            @foreach($jadwal as $j)
            <?php 
                $jadwal_b = \App\Jadwal::where([['pelatihan_id', $j->pelatihan_id],['user_id', $j->user_id]])->where('async', 0)->orderBy('mata_pelatihan', 'asc')->get(); 
            ?>
            @if ($temp == $j->user_id) 
                
            @else 
            <tr>
                <td style="text-align:center;">{{$i++}}.</td>
                <td style="padding:5px;">{{ $j->user_id > 0 ? $j->user->name : '' }}</td>
                <td style="padding:5px;">
                    Pusbang SDM Aparatur Perhubungan
                </td>
                <td style="padding:5px;">
                    <table style=" border:none;">
                        @foreach($jadwal_b as $jb)
                        <tr style=" border:none;">
                            <td height="40px">
                            - {{$jb->mata_pelatihan}} <br>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </td>
                <td style="padding:10px;">
                    <table style=" border:none;">
                        @foreach($jadwal_b as $jb)
                        <tr style=" border:none;">
                            <td height="40px">
                                {{$jb->jp}} {{ $jb->type==0 ? 'JP' : 'OJ'  }}
                                <br>
                            </td>
                        @endforeach
                    </table>
                </td>
            </tr>

            @endif
            
            <?php $temp = $j->user_id; ?>

            @endforeach
    
          </table>
          <br>
          <table style="line-height:1.5; table-layout:fixed; width:100%; text-align:left; vertical-align:top;padding:0px 30px; border-spacing:1em;page-break-inside:avoid;" border="0">
            <tr>
                <td width="38%"></td>
                <td width="20%"></td>
                <td width="42%">
                    KEPALA PUSAT PENGEMBANGAN<br>
                    SDM APARATUR PERHUBUNGAN
                </td>
            </tr>
            <tr>
                <td style="height:80px;"></td>
                <td style="height:80px;"></td>
                <td style="height:80px;"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                     <u> {{$pejabatKPP->nama}} </u><br>
                    NIP. {{$pejabatKPP->nip}}
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
