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
<body style="font-size:6pt; font-family:Arial, Helvetica, sans-serif">
    <div style="text-align:center; font-size:10px;">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <b>KARTU KENDALI KEGIATAN WIDYAISWARA</b><br>
    </div>
    <br>
    <table style="text-align:left; font-size:6pt; line-height:1.0; table-layout:fixed; width:100%; ">
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
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 45%;font-weight:bold;">KEGIATAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">JP</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 12%;font-weight:bold;">TANGGAL PELAKSANAAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 10%;font-weight:bold;">TEMPAT</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 23%;font-weight:bold;">KETERANGAN <br> (MATERI)</td>
            </tr>

        </thead>

        <tr>
            <td style="text-align:center;"><b>A</b></td>
            <td style="padding:5px;"> <b>Tatap Muka Syncronus :</b> </td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
        </tr>

        <?php $no=1; $a=1; $jp_async=0; $total_jp=0; $total_jp_async=0; ?>
        @foreach($jadwal as $j)

            
            <tr>
                <td style="text-align:center;"></td>
                    <td style="padding:5px;"> {{$no++}}. {{$j->pelatihan->nama}}
                    
                    </td>
                    <td style="padding:5px;text-align:center;">
                        {{$j->jp}}
                        <?php 
                            $total_jp += $j->jp;

                        ?>
                    </td>
                    <td style="padding:5px;">
                        &ensp; {{\Carbon\Carbon::parse($j->tgl)->isoFormat('D MMM Y')}}
                    </td>
                    <td style="padding:5px;text-align:center;">
                        PPSDMAP - Bogor
                    </td>
                    <td style="padding:5px;text-align:center;">
                        {{$j->mata_pelatihan}}
                    </td>
                

            </tr>


        @endforeach

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP Tatap Muka Syncronus</b></td>
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
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 45%;font-weight:bold;">KEGIATAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">JP</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 12%;font-weight:bold;">TANGGAL PELAKSANAAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 10%;font-weight:bold;">TEMPAT</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 23%;font-weight:bold;">KETERANGAN <br> (MATERI)</td>
            </tr>

        </thead>

        <tr>
            <td style="text-align:center;"><b>B</b></td>
            <td style="padding:5px;"> <b>Asyncronus :</b> </td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
        </tr>
        <?php $async_perday = 0; $no=1;?>
        @if(!$jadwal_async->isEmpty())
            @foreach($jadwal_async as $j)

            
                <tr>
                    <td style="text-align:center;"></td>
                    <td style="padding:5px;"> {{$no++}}. {{$j->pelatihan->nama}}
                    
                    </td>
                    <td style="padding:5px;text-align:center;">
                        <?php 
                            if($j->jp > 3){
                                $async_perday = 3;
                            } else {
                                $async_perday = $j->jp;
                            }
                        ?>
                        {{$async_perday}}
                        <?php 
                            $total_jp_async += $async_perday;
                        ?>
                    </td>
                    <td style="padding:5px;">
                        &ensp; {{\Carbon\Carbon::parse($j->tgl)->isoFormat('D MMM Y')}}
                    </td>
                    <td style="padding:5px;text-align:center;">
                        PPSDMAP - Bogor
                    </td>
                    <td style="padding:5px;text-align:center;">
                        {{$j->mata_pelatihan}}
                    </td>
                    

                </tr>
            @endforeach
        @else
        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> - </td>
            <td style="padding:5px;text-align:center;">
                -
            </td>
            <td style="padding:5px;">
                -
            </td>
            <td style="padding:5px;text-align:center;">
                -
            </td>
            <td style="padding:5px;text-align:center;">
                -
            </td>
        </tr>
        @endif

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP Tatap Muka Syncronus</b></td>
            <td style="padding:5px;" colspan="2">
                <b>{{$total_jp_async}}</b>
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
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 45%;font-weight:bold;">KEGIATAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">JP</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 12%;font-weight:bold;">TANGGAL PELAKSANAAN</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 10%;font-weight:bold;">TEMPAT</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 23%;font-weight:bold;">KETERANGAN <br> (MATERI)</td>
            </tr>

        </thead>

        <tr>
            <td style="text-align:center;"><b>C</b></td>
            <td style="padding:5px;"> <b>Non Tatap Muka (Konversi) :</b> </td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
            <td style="padding:5px;"></td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 1. Menyusun Bahan Tayang Agenda I </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>
        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 2. Menyusun Bahan Tayang Agenda I </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>
        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 3. Menyusun Bahan Tayang Agenda I </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 4. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 5. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 6. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS, Mata Pelatihan : Agenda II </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 7. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS, Mata Pelatihan : Agenda II </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>
        
        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 8. Menyusun Bahan Tayang pada Pelatihan Dasar CPNS, Mata Pelatihan : Agenda II</td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 9. Menyusun Bahan Tayang pada Mata Pelatihan : Agenda I</td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 10. Menyusun Bahan Tayang pada Mata Pelatihan : Agenda I </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;"></td>
            <td style="padding:5px;"> 11. Menyusun Bahan Tayang pada Mata Pelatihan : Agenda I </td>
            <td style="padding:5px;text-align:center;">
                1
            </td>
            <td style="padding:5px;">
                {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
            </td>
            <td style="padding:5px;">
                PPSDMAP - Bogor
            </td>
            <td style="padding:5px;text-align: center;">
                Slide
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP Non Tatap Muka (Konversi)</b></td>
            <td style="padding:5px;" >
                <b>11</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="3">
                <b></b>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Syncronus + Asyncronus + Konversi</b></td>
            <td style="padding:5px;">
                <b>{{($total_jp + $total_jp_async) + 11}}</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="3">
                <b></b>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" colspan="2"></td>
            <td style="padding:5px;">
                
            </td>
            <td style="padding:5px;text-align:center;" colspan="3">
                
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Jam Wajib Tatap Muka</b></td>
            <td style="padding:5px;">
                <b>21</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="3">
                <b></b>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Jam Wajib Non Tatap Muka (Konversi)</b></td>
            <td style="padding:5px;">
                <b>11</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="3">
                <b></b>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total Jam Wajib</b></td>
            <td style="padding:5px;">
                <b>32</b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="3">
                <b></b>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2"><b>Jumlah Total JP Tatap Muka yang dapat Dibayarkan</b></td>
            <td style="padding:5px;">
                <b>{{$tot = (($total_jp + $total_jp_async) + 11)-32}} </b>
            </td>
            <td style="padding:5px;text-align:center;" colspan="3">
                <b> </b>
            </td>
        </tr>

    </table>
    <br>
    <br>
    <br>
    <br>
    <div style="page-break-before:always;">
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
                <td style="height:60px;" width="40%"></td>
                <td style="height:60px;" width="20%"></td>
                <td style="height:60px;" width="40%"></td>
            </tr>
            <tr>
                <td width="40%"></td>
                <td width="20%"></td>
                <td width="40%">
                    <b> <u>{{$pejabatKPP->nama}} </u></b><br>
                    {{$pejabatKPP->pangkat}} <br>
                    NIP. {{$pejabatKPP->nip}}
                </td>
            </tr>
        </table>
    </div>

</body>

</html>