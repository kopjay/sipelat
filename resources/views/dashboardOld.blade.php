@extends('layouts.head')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
   
    
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            
            <!--begin::Card-->
            <div class="row">
                
                <div class="col-xl-12">

                    
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    PKA (Pelatihan Kepemimpinan Administrator)
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahPelatihan">
                                    <i class="flaticon2-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->
                            <!--begin::Accordion-->
                            @foreach($pelatihanPKN as $data)
                            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionPKN">
                                <div class="card">
                                    <div class="card-header" id="headingOne7">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsePKNheader{{$data->id}}">
                                            <span class="svg-icon svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <div class="card-label pl-4">{{$data->nama}}</div>
                                        </div>
                                    </div>
                                    <div id="collapsePKNheader{{$data->id}}" class="collapse" data-parent="#accordionPKN">
                                        <div class="card-body pl-12">
                                            <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample3">
                                                <form action="{{url('/pelatihan/delete/'.$data->id)}}" method="POST" style="display:inline-block;">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?');" style="font-size: 7pt; padding:5px 7px!important; margin-bottom:8px;"><i class="fa fa-trash" style="font-size: 7pt; display:inline-block;"></i>Hapus Pelatihan</button>
                                                </form>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne3">
                                                        <div class="card-title" data-toggle="collapse" data-target="#colapsePKN1{{$data->id}}" style="padding: 10px;">
                                                            Jadwal
                                                        </div>
                                                    </div>
                                                    <div id="colapsePKN1{{$data->id}}" class="collapse show" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            {{-- isi pengajar --}}
                                                            <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahJadwal{{$data->id}}" style="margin: 10px">
                                                                <i class="flaticon2-plus"></i> Tambah Data
                                                            </a>
                                                            <a href="{{url('jadwal/'.$data->id)}}" target="_blank" class="btn btn-sm btn-primary font-weight-bold">
                                                                <i class="flaticon-eye"></i> Lihat Jadwal PDF
                                                            </a>
                                                            <table class="table table-bordered table-hover hvr">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Hari </th>
                                                                        <th> Tanggal </th>
                                                                        <th> Waktu </th>
                                                                        <th> Mata Pelatihan </th>
                                                                        <th> JP </th>
                                                                        <th> Narasumber </th>
                                                                        <th> Action </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($data->jadwal as $jd)
                                                                    <tr>
                                                                        <td style="vertical-align: middle;">
                                                                            {{ \Carbon\Carbon::parse($jd->tgl)->format('l')}}
                                                                        </td>
                                                                        <td style="vertical-align: middle;">
                                                                            {{ \Carbon\Carbon::parse($jd->tgl)->format('d-F-Y')}}
                                                                        </td>
                                                                        <td width="150px">
                                                                            {{$jd->waktu_mulai}} - {{$jd->waktu_akhir}}
                                                                        </td>
                                                                        <td>
                                                                            {{$jd->mata_pelatihan}}
                                                                        </td>
                                                                        <td>
                                                                            {{$jd->jp}}
                                                                        </td>
                                                                        <td>
                                                                            {{$jd->narasumber}}
                                                                        </td>

                                                                        <td>
                                                                            <form action="{{url('/jadwal/delete/'.$jd->id)}}" method="POST" style="display:inline-block;">
                                                                                {{csrf_field()}}
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?');" style="font-size: 7pt; padding:5px 7px!important;"><i class="fa fa-trash" style="font-size: 7pt; display:inline-block;"></i></button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            {{-- End isi pengajar --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#colapsePKN2{{$data->id}}" style="padding: 10px;">
                                                            SK
                                                        </div>
                                                    </div>
                                                    <div id="colapsePKN2{{$data->id}}" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            <br>
                                                            <h4>Daftar Nama Tim Penyelenggara</h4>
                                                            <table class="border" style="text-align:left; font-size:10pt; line-height:1.4; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
                                                                <thead>
                                                                    <tr style="font-weight: bold">
                                                                    <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">No</td>
                                                                    <td style="padding: 10px; text-align: center; vertical-align: middle; width: 25%;font-weight:bold;">Kedudukan Dalam Tim</td>
                                                                    <td style="padding: 10px; text-align: center; vertical-align: middle; width: 30%;font-weight:bold;">Nama Anggota Panitia</td>
                                                                    <td style="padding: 10px; text-align: center; vertical-align: middle; width: 40%;font-weight:bold;">Jabatan</td>
                                                                    </tr>
                                                    
                                                                </thead>
                                                    
                                                                <tr>
                                                                    <td style="text-align:center;">1.</td>
                                                                    <td style="padding:5px;">PENGARAH</td>
                                                                    <td style="padding:5px;">
                                                                        SUGIHARDJO
                                                                    </td>
                                                                    <td style="padding:5px;">
                                                                        Kepala Badan Pengembangan SDM Perhubungan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align:center;">2.</td>
                                                                    <td style="padding:5px;">PENANGGUNG JAWAB</td>
                                                                    <td style="padding:5px;">
                                                                        M. MURDIYANTO
                                                                    </td>
                                                                    <td style="padding:5px;">
                                                                        Kepala Pusbang SDM Aparatur Perhubungan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align:center;">3.</td>
                                                                    <td style="padding:5px;">KETUA</td>
                                                                    <td style="padding:5px;">
                                                                        HERU KUSDARWANTO
                                                                    </td>
                                                                    <td style="padding:5px;">
                                                                        Kepala Bidang Diklat Struktural dan Fungsional
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align:center;">4.</td>
                                                                    <td style="padding:5px;">WAKIL KETUA I</td>
                                                                    <td style="padding:5px;">
                                                                        TEDDY
                                                                    </td>
                                                                    <td style="padding:5px;">
                                                                        Kepala Subbid Pelaksana Diklat Struktural dan Fungsional
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align:center;">5.</td>
                                                                    <td style="padding:5px;">WAKIL KETUA II</td>
                                                                    <td style="padding:5px;">
                                                                        ADRIAN HIDAYAT
                                                                    </td>
                                                                    <td style="padding:5px;">
                                                                        Kepala Subbid Standarisasi Penjamin Mutu dan Kerjasama Diklat Manajerial
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align:center;">6.</td>
                                                                    <td style="padding:5px;">ANGGOTA</td>
                                                                    <td style="padding:5px;">
                                                                        ISWANDI
                                                                    </td>
                                                                    <td style="padding:5px;">
                                                                        Penyusun dan Pemroses Penyelenggaraan Diklat
                                                                    </td>
                                                                </tr>
                                                        
                                                            </table>
                                                             <br>
                                                            {{-- <a href="{{url('#')}}" target="_blank" class="btn btn-sm btn-warning font-weight-bold">
                                                                <i class="flaticon-edit"></i> Edit Data Penyelenggara
                                                            </a> --}}
                                                            <a href="{{url('/pdf')}}" target="_blank" class="btn btn-sm btn-primary font-weight-bold">
                                                                <i class="flaticon-eye"></i> Lihat SK PDF
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="card">
                                                    <div class="card-header" id="headingFive3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#colapsePKN7{{$data->id}}" style="padding: 10px;">
                                                           Evaluasi
                                                        </div>
                                                    </div>
                                                    <div id="colapsePKN7{{$data->id}}" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            {{-- <h4>Daftar Penilaian</h4> --}}
                                                            <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahEvaluasi{{$data->id}}" style="margin: 10px">
                                                                <i class="flaticon2-plus"></i> Tambah Data
                                                            </a>

                                                            <a href="#" class="btn btn-sm btn-success font-weight-bold" data-toggle="modal" data-target="#importEvaluasi{{$data->id}}" style="margin: 10px">
                                                                <i class="flaticon2-file"></i> Import Data
                                                            </a>
                                                            
                                                            <table class="border" style="text-align:left; font-size:10pt; line-height:1.4; table-layout:fixed; width:100%;margin-top:10px;vertical-align:middle;text-align:justify;  border:1px solid black; border-collapse: collapse;">
                                                                <thead>
                                                                    <tr style="font-weight: bold">
                                                                    <td style="padding: 10px; text-align: center; vertical-align: middle; width: 5%;font-weight:bold;">No</td>
                                                                    <td style="padding: 10px; vertical-align: middle; width: 25%;font-weight:bold;">NIP</td>
                                                                    <td style="padding: 10px; vertical-align: middle; width: 30%;font-weight:bold;">Nama</td>
                                                                    <td style="padding: 10px; vertical-align: middle; width: 40%;font-weight:bold;">Skor</td>
                                                                    </tr>
                                                    
                                                                </thead>
                                                                <?php $no = 1;?>
                                                                @foreach($data->evaluasi as $d)
                                                                
                                                                <tr>
                                                                    <td style="text-align:center;">{{$no++}}</td>
                                                                    <td style="padding:5px;">{{$d->nip}}</td>
                                                                    <td style="padding:5px;">
                                                                        {{$d->nama}}
                                                                    </td>
                                                                    <td style="padding:5px;">
                                                                        {{$d->nilai}}
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                
                                                        
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingFive3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#colapsePKN5{{$data->id}}" style="padding: 10px;">
                                                            Kartu Kendali dan Honor
                                                        </div>
                                                    </div>
                                                    <div id="colapsePKN5{{$data->id}}" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                                                                <thead>
                                                                    <tr>
                                                                        <th title="Field #2">Nama Pengajar</th>
                                                                        <th title="Field #3"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($user as $a)
                                                                    <tr>
                                                                        <td>{{$a->name}}</td>
                                                                        <td>
                                                                            {{-- <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$a->id}}" data-original-title="Edit" class="btn btn-sm btn-clean btn-icon mr-2 userModalEdit">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a> --}}
                                                                            <a href="{{url('kartukendali/02/2023')}}/10" target="_blank" class="btn btn-sm btn-primary font-weight-bold">
                                                                                <i class="flaticon-eye"></i> Lihat Kartu Kendali
                                                                            </a>

                                                                            <a href="{{url('honor/02/2023')}}/10" target="_blank" class="btn btn-sm btn-success font-weight-bold">
                                                                                <i class="flaticon-eye"></i> Lihat Honor
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingFive3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#colapsePKN6{{$data->id}}" style="padding: 10px;">
                                                           Anggaran
                                                        </div>
                                                    </div>
                                                    <div id="colapsePKN6{{$data->id}}" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                           <table>
                                                               <tr>
                                                                   <td>
                                                                       <b>Anggaran </b>
                                                                   </td>
                                                                   <td>:</td>
                                                                   <td>
                                                                       Rp. 720.000.000
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td>
                                                                       <b>Honor Pengajar </b>
                                                                   </td>
                                                                   <td>:</td>
                                                                   <td>
                                                                       Rp. 230.000.000
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td>
                                                                       <b>Total Setelah Honor  </b>
                                                                   </td>
                                                                   <td>:</td>
                                                                   <td>
                                                                        Rp. 490.000.000
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--end::Accordion-->
                            <!--end::Content-->
                        </div>
                    </div>

                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    PKN (Pelatihan Kepemimpinan Nasional)
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahPelatihan">
                                    <i class="flaticon2-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->
                            <!--begin::Accordion-->
                            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionExample7">
                                <div class="card">
                                    <div class="card-header" id="headingOne7">
                                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne7">
                                            <span class="svg-icon svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <div class="card-label pl-4">Tes </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne7" class="collapse" data-parent="#accordionExample7">
                                        <div class="card-body pl-12">
                                            <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample3">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne3">
                                                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne3" style="padding: 10px;">
                                                            Jadwal
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            {{-- isi pengajar --}}
                                                            <h3 style="text-align: center;margin: 20px 0px">Jadwal</h3>
																	<table class="table table-bordered table-hover hvr">
																		<thead>
																			<tr>
																				<th> Hari </th>
																				<th> Tanggal </th>
																				<th> Waktu </th>
																				<th> Mata Pelatihan </th>
																				<th> JP </th>
																				<th> Narasumber </th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td style="vertical-align: middle;">
																					Kamis
																				</td>
																				<td style="vertical-align: middle;">
																					02 September 2021
																				</td>
																				<td width="150px">
																					08.00 - 15.45
																				</td>
																				<td>
																					Bela Negara Kepemimpinan Pancasila
																				</td>
																				<td>
																					10 JP
																				</td>
																				<td>
																					Indrinityas Pancawardany
																				</td>
																			</tr>
																		</tbody>
																	</table>
                                                            {{-- End isi pengajar --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo3" style="padding: 10px;">
                                                            SK
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo3" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree3" style="padding: 10px;">
                                                            Pengajar
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree3" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFour3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour3" style="padding: 10px;">
                                                            Kurikulum
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour3" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFive3">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive3" style="padding: 10px;">
                                                            Kartu Kendali
                                                        </div>
                                                    </div>
                                                    <div id="collapseFive3" class="collapse" data-parent="#accordionExample3">
                                                        <div class="card-body" style="padding: 10px;">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--end::Accordion-->
                            <!--end::Content-->
                        </div>
                    </div>

                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                            <h3 class="card-label">
                                PKP (Pelatihan Kepemimpinan Pengawas)
                            </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahPelatihan">
                                    <i class="flaticon2-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->
                            <!--begin::Accordion-->
                           
                            <!--end::Accordion-->
                            <!--end::Content-->
                        </div>
                    </div>

                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                            <h3 class="card-label">
                                LATSAR (Pelatihan Dasar)
                            </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahPelatihan">
                                    <i class="flaticon2-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->
                            <!--begin::Accordion-->
                            
                            <!--end::Accordion-->
                            <!--end::Content-->
                        </div>
                    </div>
   
   
                </div>

            </div>



            
            
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

{{-- modal tambah pelatihan --}}
<div class="modal fade" id="tambahPelatihan" tabindex="-1" role="dialog" aria-labelledby="tambahPelatihanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPelatihanLabel">Tambah Data Pelatihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form enctype="multipart/form-data" action="{{ url('/pelatihan/store') }}" method="post">
                @csrf
                {{-- <input type="hidden" value="{{ Request::segment(2) }}" name="id_jenis"> --}}
                <input type="hidden" value="1" name="pelatihan_header_id">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="datetime" class="form-control" name="nama" placeholder="Nama" required/>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- modal tambah jadwal --}}
@foreach($pelatihanPKN as $data)
<div class="modal fade" id="tambahJadwal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="tambahJadwalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahJadwalLabel">Tambah Data Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form enctype="multipart/form-data" action="{{ url('/jadwal/store') }}" method="post">
                @csrf
                {{-- <input type="hidden" value="{{ Request::segment(2) }}" name="id_jenis"> --}}
                <input type="hidden" value="{{$data->id}}" name="pelatihan_id">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tgl" placeholder="Tanggal" required/>
                    </div>
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="time" class="form-control" name="waktu_mulai" placeholder="Waktu" required/>
                        <input type="time" class="form-control" name="waktu_akhir" placeholder="Waktu" required/>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelatihan</label>
                        <input type="text" class="form-control" name="mata_pelatihan" placeholder="Mata Pelatihan" required/>
                    </div>
                    <div class="form-group">
                        <label>JP</label>
                        <input type="text" class="form-control" name="jp" placeholder="jp" required/>
                    </div>
                    <div class="form-group">
                        <label>Narasumber</label>
                        <input type="text" class="form-control" name="narasumber" placeholder="narasumber" required/>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahEvaluasi{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="tambahEvaluasiLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahEvaluasiLabel">Tambah Data Evaluasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form enctype="multipart/form-data" action="{{ url('/evaluasi/store') }}" method="post">
                @csrf
                {{-- <input type="hidden" value="{{ Request::segment(2) }}" name="id_jenis"> --}}
                <input type="hidden" value="{{$data->id}}" name="pelatihan_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required/>
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="nip" required/>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control" name="nilai" placeholder="nilai" required/>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="importEvaluasi{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="importEvaluasiLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importEvaluasiLabel">Import Data Evaluasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form action="import/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endforeach

@endsection
