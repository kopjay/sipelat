<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .border table, .faktur .table tr, .border td{
            border:1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body style="font-size:10pt; font-family:Arial, Helvetica, sans-serif">
    <div style="text-align:center; font-size:14px;">
        <br>
        <b>KARTU KENDALI KEGIATAN WIDYAISWARA</b><br>
    </div>
    <br>
    <table style="text-align:left; font-size:8pt; line-height:1.0; table-layout:fixed; width:100%; ">
        <tr>
            <td width="5px">Nama</td>
            <td width="5px">:</td>
            <td width="400px">{{$user->name}}</td>
        </tr>
        <tr>
            <td>N.I.P</td>
            <td>:</td>
            <td>{{$user->nip}}</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>Widyaiswara Ahli Madya</td>
        </tr>
        <tr>
            <td>Unit Kerja</td>
            <td>:</td>
            <td>Pusat Pengembangan SDM Aparatur Perhubungan</td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td>:</td>

            <?php  $time = strtotime(Request::segment(2).'/1/'.Request::segment(3));?>

            <td>{{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}</td>
        </tr>
       
    </table>

    <br>
    <table class="border" style="text-align:left; font-size:5pt; line-height:1.4; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
        <thead>
            <tr style="font-weight: bold">
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">NO</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 35%;font-weight:bold;">KEGIATAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">JP</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 15%;font-weight:bold;">TANGGAL PELAKSANAAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">TEMPAT</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">KETERANGAN</td>
            </tr>

        </thead>

        <tr>
            <td style="text-align:center;"><b>A</b></td>
            <td style="padding:5px;"> <b>Tatap Muka di depan kelas :</b> </td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
        </tr>

        <?php $no=1; $temp_pel = 0; $a=1; $jp=0; $total_jp=0; ?>
        @foreach($jadwal as $j)

        @if($temp_pel == $j->pelatihan_id)
            <?php $a++;?>
        @else
            <?php $a=1;?>
        <tr>
            <td style="text-align:center;"></td>
                <td style="padding:5px;"> {{$no++}}. Melaksanakan tatap muka didepan kelas pada {{$j->pelatihan->nama}} Mata Pelatihan : 
                    @foreach(\App\Jadwal::where(['pelatihan_id' => $j->pelatihan_id,'user_id' => $j->user_id])->whereMonth('tgl', \Carbon\Carbon::parse($time)->month)->get() as $pelatihan)
                        {{$pelatihan->mata_pelatihan}},
                        <?php  $jp += $pelatihan->jp; ?>
                    @endforeach
                </td>
                <td style="padding:5px;text-align:center;">
                    {{$jp}}
                    <?php $total_jp += $jp; $jp = 0;?>
                </td>
                <td style="padding:5px;">
                    @foreach(\App\Jadwal::where(['pelatihan_id' => $j->pelatihan_id,'user_id' => $j->user_id])->whereMonth('tgl', \Carbon\Carbon::parse($time)->month)->get() as $pelatihan)
                    {{\Carbon\Carbon::parse($pelatihan->tgl)->isoFormat('D')}}, 
                    @endforeach
                    {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
                </td>
                <td style="padding:5px;">
                    PPSDMAP - Bogor
                </td>
                <td style="padding:5px;">
                    Jam Pelajaran
                </td>
            

        </tr>
        @endif 
        <?php  $temp_pel = $j->pelatihan_id; ?>
        @endforeach

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP Tatap Muka</b></td>
            <td style="padding:5px;" colspan="2">
                <b>{{$total_jp}}</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="2">
                <b>Jam Pelajaran</b>
            </td>
        </tr>

    </table>

    <table class="border" style="text-align:left; font-size:5pt; line-height:1.4; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
        <thead>
            <tr style="font-weight: bold">
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">NO</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 35%;font-weight:bold;">KEGIATAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">JP</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 15%;font-weight:bold;">TANGGAL PELAKSANAAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">TEMPAT</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">KETERANGAN</td>
            </tr>

        </thead>

        <tr>
            <td style="text-align:center;"><b>A</b></td>
            <td style="padding:5px;"> <b>Non Tatap Muka (Konversi) :</b> </td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 1. Menyusun Bahan Tayang Agenda I : Wawasan Kebangsaan </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>
        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 2. Menyusun Bahan Tayang Agenda I : Analisis Isu Kontemporer </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>
        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 3. Menyusun Bahan Tayang Agenda I : Kesiapsiagaan Bela Negara </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 4. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS Gol III </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 5. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS Gol III </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 6. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS Gol III Angkatan VIII Tahun 2021, Mata Pelatihan : Agenda II : Etika Publik </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 7. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS Gol III Angkatan VIII Tahun 2021, Mata Pelatihan : Agenda II : Komitmen </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>
        
        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 8. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS Gol III Angkatan VIII Tahun 2021, Mata Pelatihan : Agenda II : Anti Korupsi </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 9. Menyusun Bahan Tayang pada Mata Pelatihan : Agenda I : Wawasan Kebangsaan </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 10. Menyusun Bahan Tayang pada Mata Pelatihan : Agenda I : Analisis Isu Kontemporer </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 11. Menyusun Bahan Tayang pada Mata Pelatihan : Agenda I : Kesiapsiagaan Bela Negara </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP Non Tatap Muka (Konversi)</b></td>
            <td style="padding:5px;" colspan="2">
                <b>11</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="2">
                <b>Jam Pelajaran</b>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP Tatap Muka + JP Non Tatap Muka (Konversi)</b></td>
            <td style="padding:5px;" colspan="2">
                <b>{{$total_jp + 11}}</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="2">
                <b>Jam Pelajaran</b>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total Jam Wajib</b></td>
            <td style="padding:5px;" colspan="2">
                <b>32</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="2">
                <b>Jam Pelajaran</b>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP yang dapat Dibayarkan</b></td>
            <td style="padding:5px;" colspan="2">
                <b>({{$total_jp + 11}} - 32) = {{$tot = ($total_jp + 11)-32}} </b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="2">
                <b> {{$tot}} Jam Pelajaran</b>
            </td>
        </tr>

    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table style="text-align:left; font-size:6pt; line-height:1.5; table-layout:fixed; width:100%; vertical-align:top;margin-left:80px;" border="0">
        <tr>
            <td width="44%"></td>
            <td width="20%"></td>
            <td width="36%">
                Bogor, {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
        </tr>
    </table>

    <table style="line-height:1.5; font-size:6pt; table-layout:fixed; width:100%; text-align:center; vertical-align:top;padding:0px 30px; border-spacing:1em;" border="0">
        <tr>
            <td width="40%"></td>
            <td width="20%"></td>
            <td width="40%">
                KEPALA PUSAT PENGEMBANGAN<br>
                SDM APARATUR PERHUBUNGAN
            </td>
        </tr>
        <tr>
            <td style="height:80px;" width="40%"></td>
            <td style="height:80px;" width="20%"></td>
            <td style="height:80px;" width="40%"></td>
        </tr>
        <tr>
            <td width="40%"></td>
            <td width="20%"></td>
            <td width="40%">
                <b> <u>M.MURDIYANTO</u></b><br>
                Pembina Utama Muda (IV/c) <br>
                NIP. 19670314 199203 1 003
            </td>
        </tr>
    </table>

</body>

</html>