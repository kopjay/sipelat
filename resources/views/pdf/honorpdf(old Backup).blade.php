
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Honor</title>
    <style>
        .border table, .faktur .table tr, .border td{
            border:1px solid black;
            border-collapse: collapse;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body style="font-size:10pt; font-family:Arial, Helvetica, sans-serif">
    <?php  $time = strtotime(Request::segment(2).'/1/'.Request::segment(3));?>

    <div style="text-align:left; font-size:10px; margin-left:150px;">
        <br>
        <b>PEMBAYARAN HONORARIUM MENGAJAR PELATIHAN KEPEMIMPINAN TAHUN 2023, SESUAI DENGAN SURAT KEPUTUSAN KUASA PENGGUNA ANGGARAN <br> PUSAT PENGEMBANGAN SUMBER DAYA MANUSIA APARATUR PERHUBUNGAN TAHUN 2023</b><br>
        Nomor : SK. <br>
        Tanggal : {{\Carbon\Carbon::parse($time)->isoFormat('D MMMM Y')}}
    </div>
    <br>
    <table class="border" style="text-align:left; font-size:5pt; line-height:1; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
        <thead>
            <tr style="font-weight: bold;">
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 6%;font-weight:bold;">No</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 25%;font-weight:bold;">Nama <br>Tanggal dan Topik Ceramah</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 9%;font-weight:bold;">Besar <br>Honorarium <br>/ Jam</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 9%;font-weight:bold;">Jumlah <br>Jam <br>Mengajar</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 12%;font-weight:bold;">Jumlah <br>Honorarium</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 9%;font-weight:bold;">Besar Pajak <br>Psl 21 <br>(15 & 5%)</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 10%;font-weight:bold;">Jumlah <br>Bersih yang <br>Diterima</td>
                <td style="padding: 10px; text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">Tanda Tangan</td>
            </tr>

        </thead>

        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: middle;">1.</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">{{\Carbon\Carbon::parse($time)->isoFormat('dddd, D MMMM Y')}}</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
        </tr>
        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"><b>{{$user->name}}</b></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
        </tr>
        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">Topik</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
        </tr>
        <?php $tempp = 5; $user->pajak == 0 ? $tempp = 5 : $tempp = $user->pajak  ?>
        <?php $jumlah_honor = 0; $total_honor = 0;$total_honor_net = 0; $pajak = 0; $total_pajak = 0; $total_jp = 0;?>
        @foreach($jadwal as $j)
        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">{{$j->mata_pelatihan}}</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">Rp. 200.000</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">{{$j->jp}} JP</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">Rp. {{number_format($jumlah_honor = 200000 * $j->jp, 0, ',', '.')}}</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">Rp. {{number_format($pajak = $jumlah_honor*($tempp/100), 0, ',', '.')}}</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">Rp. {{number_format($jumlah_honor - $pajak, 0, ',', '.') }}</td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;">1 .....................................................</td>
        </tr>

        <?php $total_honor+=$jumlah_honor; $jumlah_honor = 0; $total_pajak+=$pajak; $pajak=0; $total_jp+=$j->jp;?>
        @endforeach

        <tr>
            <td style="text-align:center;vertical-align: top;"></td>
            <td style="padding:5px;vertical-align: top;"></td>
            <td style="padding:5px;vertical-align: top;"></td>
            <td style="padding:5px;vertical-align: top;"><b> {{($total_jp - 32) + 11}} JP </b></td>
            <td style="padding:5px;vertical-align: top;"><b> Rp. {{number_format($total_honor - (200000 * (32 - 11)), 0, ',', '.')}}</b></td>
            <td style="padding:5px;vertical-align: top;"><b> Rp. {{number_format(($total_honor - (200000 * (32 - 11))) * ($tempp/100), 0, ',', '.')}}</b></td>
            <td style="padding:5px;vertical-align: top;"><b> Rp. {{number_format(($total_honor - (200000 * (32 - 11))) - ($total_honor - (200000 * (32 - 11))) * ($tempp/100), 0, ',', '.')}}</b></td>
            <td style="padding:5px;vertical-align: top;"></td>
        </tr>

        
    </table>

    <table style="text-align:left; font-size:13px; line-height:1.2; table-layout:fixed; width:100%; text-align:center; vertical-align:top; margin-top: 20px;" border="0">
        <tr>
          <td width="35%"> <b> MENGETAHUI / MENYETUJUI <br> PEJABAT PEMBUAT KOMITEMEN <br>PUSBANG SDM APARATUR PERHUBUNGAN </b> </td>
          <td width="30%"></td>
          <?php $tes = Request::segment(2)+1; $waktu = strtotime($tes.'/1/'.Request::segment(3)); ?>
          <td width="35%"><b> Bogor, {{\Carbon\Carbon::parse($waktu)->isoFormat('D MMMM Y')}} <br>BENDAHARA  PENGELUARAN <br> PUSBANG SDM APARATUR PERHUBUNGAN </b></td>
        </tr>
        <tr>
          <td width="35%"><!-- CV. CIPTA BAROKAH ABADI --></td>
          <td width="30%"></td>
          <td width="35%"><!-- KUASA PENGGUNA ANGGARAN BALAI PENDIDIKAN DAN PELATIHAN TRANSPORTASI LAUT --></td>
        </tr>
        <tr>
          <td style="height:90px;" width="35%"></td>
          <td style="height:90px;" width="30%"></td>
          <td style="height:90px;" width="35%"></td>
        </tr>
        <tr>
          <td width="35%"><b><u>{{$pejabatPPK->nama}}</u></b><br>NIP. {{$pejabatPPK->nip}} </td>
          <td width="30%"></td>
          <td width="35%"><b><u>{{$pejabatBP->nama}}</u></b><br>NIP. {{$pejabatPPK->nip}}</td>
        </tr>
      </table>
</body>

</html>