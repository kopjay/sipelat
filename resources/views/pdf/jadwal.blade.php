
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
    <div style="text-align:center; font-size:10px;">
        <br>
        <b>JADWAL PELATIHAN {{$pelatihan->nama}}</b><br>
    </div>
    <br>
    <table class="border" style="text-align:left; font-size:5pt; line-height:1.4; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
        <thead>
            <tr style="font-weight: bold">
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">No</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 7%;font-weight:bold;">Hari</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 13%;font-weight:bold;">Tanggal</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 10%;font-weight:bold;">Waktu</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 40%;font-weight:bold;">Mata Pelatihan</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">JP</td>
            <td style="padding: 10px; text-align: center; vertical-align: middle; width: 20%;font-weight:bold;">Narasumber</td>
            </tr>

        </thead>

        <?php $no=1; $temp_date = 0; $a=1; ?>
        @foreach($data as $d)
        <?php 
        
        // if ($no >= 2 && $temp_date == $d->tgl) {
        //    $a++;
        // } else {
        //    $a=1;
        // }
         
        ?>
        <tr>
            <td style="text-align:center;">{{$no++}}.</td>
            <td style="padding:5px;">{{\Carbon\Carbon::parse($d->tgl)->isoFormat('dddd')}}</td>
            <td style="padding:5px;">{{\Carbon\Carbon::parse($d->tgl)->isoFormat('D MMMM Y')}}</td>
            <td style="padding:5px;">{{date('G:i', strtotime($d->waktu_mulai))}} - {{date('G:i', strtotime($d->waktu_akhir))}}</td>
            <td style="padding:5px;">{{$d->mata_pelatihan}}</td>
            <td style="padding:5px;">{{$d->jp}} {{ $d->type==0 ? 'JP' : 'OJ'  }} </td>
            <td style="padding:5px;">{{(\App\User::find($d->user_id))['name']}}</td>
        </tr>

        <?= $temp_date = $d->tgl; ?>
        @endforeach

        
    </table>
</body>

</html>