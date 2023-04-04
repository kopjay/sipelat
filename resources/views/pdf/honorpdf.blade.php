
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
    <?php  $time = strtotime(Request::segment(2).'/1/'.Request::segment(3)); $total_sync=0;$total_async=0;$total_mix=0; $total_jp_mix = 0;?>
    {{-- ----- --}}
    @foreach($jadwal as $sync)
    <?php $total_sync+=$sync->jp; ?>
    @endforeach

    @foreach($jadwal_async as $async)
    <?php 
        if($async->jp > 3){
            $async_perday = 3;
        } else {
            $async_perday = $async->jp;
        }
    ?>
    <?php $total_async+=$async_perday; ?>
    @endforeach

    <?php $total_mix = (($total_sync + $total_async) + 11)-32 ?>

    {{-- ----- --}}

    <?php $temp_pel = 0; $a=1;?>
    @foreach($jadwal as $data)

    @if($temp_pel == $data->pelatihan_id)
        <?php $a++;?>
    @else
        <?php $a=1;?>
        @foreach(\App\Jadwal::where(['pelatihan_id' => $data->pelatihan_id,'user_id' => $data->user_id])->where('async',0)->whereMonth('tgl', \Carbon\Carbon::parse($time)->month)->get()->chunk(4) as $group)
    <div style="text-align:left; font-size:9pt; margin-left:150px;">
        <br>
        <b>PEMBAYARAN HONORARIUM MENGAJAR {{$data->pelatihan->nama}}, SESUAI DENGAN SURAT KEPUTUSAN KUASA PENGGUNA ANGGARAN PUSAT PENGEMBANGAN SUMBER DAYA MANUSIA APARATUR PERHUBUNGAN TAHUN 2023</b><br>
        Nomor :  <br>
        Tanggal : 
        {{-- {{\Carbon\Carbon::parse($time)->isoFormat('D MMMM Y')}} --}}
    </div>
  
    <table class="border" style="text-align:left; font-size:8pt; line-height:1; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
        <thead>
            <tr style="font-weight: bold;">
                <td style=" text-align: center; vertical-align: middle; width: 3%;font-weight:bold;">No</td>
                <td style=" text-align: center; vertical-align: middle; width: 32%;font-weight:bold;">Nama <br>Tanggal dan Topik Ceramah</td>
                <td style=" text-align: center; vertical-align: middle; width: 9%;font-weight:bold;">Besar <br>Honorarium <br>/ Jam</td>
                <td style=" text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">Jumlah <br>Jam <br>Mengajar</td>
                <td style=" text-align: center; vertical-align: middle; width: 12%;font-weight:bold;">Jumlah <br>Honorarium</td>
                <td style=" text-align: center; vertical-align: middle; width: 9%;font-weight:bold;">Besar Pajak <br>Psl 21 <br>(15 & 5%)</td>
                <td style=" text-align: center; vertical-align: middle; width: 10%;font-weight:bold;">Jumlah <br>Bersih yang <br>Diterima</td>
                <td style=" text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">Tanda Tangan</td>
            </tr>

        </thead>
        <?php $tempp = 0; $user->pajak == 0 ? $tempp = 0 : $tempp = $user->pajak  ?>
        <?php $jumlah_honor = 0; $total_honor = 0;$total_honor_net = 0; $pajak = 0; $total_pajak = 0; $total_jp = 0; $numb=1; $number=1;?>

       
        @foreach ($group as $j)
            
        <?php 
            $total_jp_mix+=$j->jp;
            if ($total_jp_mix > $total_mix) {
                $j->jp = $j->jp-($total_jp_mix - $total_mix);
                
            } 
            
        ?>
        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: middle;">{{$number++}}.</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">{{\Carbon\Carbon::parse($j->tgl)->isoFormat('dddd, D MMMM Y')}}</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
        </tr>
        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"><b>{{$user->name}}</b></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
        </tr>
        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">Topik</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;"></td>
        </tr>
        
        
        <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">{{$j->mata_pelatihan}}</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">Rp. 200.000</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">{{$j->jp}} JP</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">Rp. {{number_format($jumlah_honor = 200000 * $j->jp, 0, ',', '.')}}</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">Rp. {{number_format($pajak = $jumlah_honor*($tempp/100), 0, ',', '.')}}</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">Rp. {{number_format($jumlah_honor - $pajak, 0, ',', '.') }}</td>
            <td style="padding:3px;border-bottom:none;border-top:none;vertical-align: top;">{{$numb++}} ....................................................</td>
        </tr>

        <?php $total_honor+=$jumlah_honor; $jumlah_honor = 0; $total_pajak+=$pajak; $pajak=0; $total_jp+=$j->jp;?>
        <?php if ($total_jp_mix >= $total_mix) {
            break;
        } 
        ?>
         <tr>
            <td style="text-align:center;border-bottom:none;border-top:none;vertical-align: middle;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
            <td style="padding:5px;border-bottom:none;border-top:none;vertical-align: top;"></td>
        </tr>
        
        @endforeach
        <tr>
            <td style="text-align:center;vertical-align: top;"></td>
            <td style="padding:5px;vertical-align: top;"></td>
            <td style="padding:5px;vertical-align: top;"></td>
            <td style="padding:5px;vertical-align: top;"><b> {{($total_jp)}} JP </b></td>
            <td style="padding:5px;vertical-align: top;"><b> Rp. {{number_format($total_honor, 0, ',', '.')}}</b></td>
            <td style="padding:5px;vertical-align: top;"><b> Rp. {{number_format(($total_honor) * ($tempp/100), 0, ',', '.')}}</b></td>
            <td style="padding:5px;vertical-align: top;"><b> Rp. {{number_format(($total_honor) - ($total_honor) * ($tempp/100), 0, ',', '.')}}</b></td>
            <td style="padding:5px;vertical-align: top;"></td>
        </tr>

        
    </table>

    <table style="text-align:left; font-size:9pt; line-height:1; table-layout:fixed; width:100%; text-align:center; vertical-align:top; margin-top: 20px;" border="0">
        <tr>
          <td width="35%"> <b> MENGETAHUI / MENYETUJUI <br> PEJABAT PEMBUAT KOMITEMEN <br>PUSBANG SDM APARATUR PERHUBUNGAN </b> </td>
          <td width="30%"></td>
          <?php $tes = Request::segment(2)+1; $waktu = strtotime($tes.'/1/'.Request::segment(3)); ?>
          <td width="35%"><b> Bogor, &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;{{\Carbon\Carbon::parse($waktu)->isoFormat('Y')}} <br>BENDAHARA  PENGELUARAN <br> PUSBANG SDM APARATUR PERHUBUNGAN </b></td>
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
      <div class="page-break"></div>
    @endforeach

      @endif 
      <?php  $temp_pel = $data->pelatihan_id; ?>
        <?php if ($total_jp_mix >= $total_mix) {
            break;
        } 
        ?>
      @endforeach
</body>

</html>