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
                                    Dashboard
                                </h3>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->
                            <!--begin::Accordion-->
                           
                            <div class="col-lg-12">
                                <!--begin::Card-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header h-auto">
                                        <!--begin::Title-->
                                        <div class="card-title py-5">
                                            <h3 class="card-label">Total Pengunjung : 4.417</h3>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <div class="card-body">
                                        <!--begin::Chart-->
                                        <div id="chart_1"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Card-->
                            </div>
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
