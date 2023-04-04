@extends('layouts.head')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Modal-->
    <div class="modal fade" id="subheader7Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="kt_subheader_leaflet" style="height:450px; width: 100%;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
                    <button id="submit" type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Data File
                    </div>
                    <div class="card-toolbar">
                        
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#fileModalRequest">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Tambah Data</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-xl-4">
                                <div class="row align-items-center">
                                    <div class="col-md-12 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th title="Field #91">No SOP</th>
                                <th title="Field #2">Nama</th>
                                <th title="Field #3">File</th>
                                <th title="Field #92">Tanggal Revisi</th>
                                <th title="Field #93">No Revisi</th>
                                <th title="Field #9"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp                       
                            @foreach ($data as $a)
                            <tr>
                                <td>{{$a->no_sop}}</td>
                                <td>{{$a->nama}}</td>
                                <td>{{$a->file}}</td>
                                <td>{{$a->tgl_revisi}}</td>
                                <td>{{$a->no_revisi}}</td>
                                <td>
                                    <a href="{{url('file/download/'.$a->file.'/'.$a->nama.'/')}}">
                                        <button type="button" class="btn btn-light btn-elevate-hover btn-circle btn-icon">
                                            <i class="fa fa-download" style="color:slateblue;"></i>
                                        </button>
                                    </a>
                                    <form action="{{url('/SD/delete/'.$a->id)}}" method="POST" style="display:inline-block;">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-light btn-elevate-hover btn-circle btn-icon" onclick="return confirm('Yakin ingin menghapus data?');">
                                            <i class="fa fa-trash" style="color:rgb(186, 51, 51);"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

            
                            
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>





<!-- Modal 2-->
<div class="modal fade" id="fileModalRequest" tabindex="-1" role="dialog" aria-labelledby="poliModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="poliModalLabel">Add Data file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form enctype="multipart/form-data" action="{{ url('/SD/store') }}" method="post">
                @csrf
                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                <input type="hidden" value="{{ Request::segment(2) }}" name="id_jenis">
                <div class="modal-body">
                    <div class="form-group">
                        <label>No SOP</label>
                        <input type="text" class="form-control" name="no_sop" placeholder="No SOP"/>
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama"/>
                    </div>

                    <div class="form-group">
                        <label>No Revisi</label>
                        <input type="text" class="form-control" name="no_revisi" placeholder="No Revisi"/>
                    </div>

                    <div class="form-group">
                        <label>Tgl Revisi</label>
                        <input type="date" class="form-control" name="tgl_revisi" placeholder="Tgl Revisi"/>
                    </div>
                    
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" class="form-control" name="file"/>
                        
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


@endsection
