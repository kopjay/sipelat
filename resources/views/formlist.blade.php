@extends('layouts.headForm')

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
                        <h3 class="card-label">Total Data Formulir Kesediaan : {{\App\FormDaftar::count()}}
                    </div>
                    <div class="card-toolbar">
                        <a href="{{url('formdaftar')}}" class="btn btn-primary font-weight-bolder">
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
                       
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                                <option value="4">Success</option>
                                                <option value="5">Info</option>
                                                <option value="6">Danger</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                            <select class="form-control" id="kt_datatable_search_type">
                                                <option value="">All</option>
                                                <option value="1">Online</option>
                                                <option value="2">Retail</option>
                                                <option value="3">Direct</option>
                                            </select>
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
                    <table class="datatable datatable-bordered datatable-head-custom horizx" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>NIP</th>
                                <th>Tempat/Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Pendidikan</th>
                                <th>Studi</th>
                                <th>Agama</th>
                                <th>Istri/Suami</th>
                                <th>Olahraga</th>
                                <th>Informasi Lain</th>
                                <th>Instansi</th>
                                <th>Jabatan</th>
                                <th>Pangkat</th>
                                <th>Alamat Kantor</th>
                                <th>Telepon Kantor</th>
                                <th>Fax</th>
                                <th>Email Kantor</th>
                                <th>Pelatihan</th>
                                <th>Angkatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->gender}}</td>
                                <td>{{$d->nip}}</td>
                                <td>{{$d->ttl}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->telepon}}</td>
                                <td>{{$d->pendidikan}}</td>
                                <td>{{$d->studi}}</td>
                                <td>{{$d->agama}}</td>
                                <td>{{$d->istrisuami}}</td>
                                <td>{{$d->olahraga}}</td>
                                <td>{{$d->informasi}}</td>
                                <td>{{$d->instansi}}</td>
                                <td>{{$d->jabatan}}</td>
                                <td>{{$d->pangkat}}</td>
                                <td>{{$d->alamat_kantor}}</td>
                                <td>{{$d->telepon_kantor}}</td>
                                <td>{{$d->fax}}</td>
                                <td>{{$d->email_kantor}}</td>
                                <td>{{$d->pelatihan}}</td>
                                <td>{{$d->angkatan}}</td>
                                <td>
                                    <a href="{{asset('form11.pdf')}}" target="__blank" class="btn btn-primary font-weight-bolder">
                                        </span>View</a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->


                    {{-- <table class="table table-striped horizx">
                        <tr>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>NIP</th>
                            <th>Tempat/Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Pendidikan</th>
                            <th>Studi</th>
                            <th>Agama</th>
                            <th>Istri/Suami</th>
                            <th>Olahraga</th>
                            <th>Informasi Lain</th>
                            <th>Instansi</th>
                            <th>Jabatan</th>
                            <th>Pangkat</th>
                            <th>Alamat Kantor</th>
                            <th>Telepon Kantor</th>
                            <th>Fax</th>
                            <th>Email Kantor</th>
                            <th>Pelatihan</th>
                            <th>Angkatan</th>

                        </tr>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->gender}}</td>
                            <td>{{$d->nip}}</td>
                            <td>{{$d->ttl}}</td>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->telepon}}</td>
                            <td>{{$d->pendidikan}}</td>
                            <td>{{$d->studi}}</td>
                            <td>{{$d->agama}}</td>
                            <td>{{$d->istrisuami}}</td>
                            <td>{{$d->olahraga}}</td>
                            <td>{{$d->informasi}}</td>
                            <td>{{$d->instansi}}</td>
                            <td>{{$d->jabatan}}</td>
                            <td>{{$d->pangkat}}</td>
                            <td>{{$d->alamat_kantor}}</td>
                            <td>{{$d->telepon_kantor}}</td>
                            <td>{{$d->fax}}</td>
                            <td>{{$d->email_kantor}}</td>
                            <td>{{$d->pelatihan}}</td>
                            <td>{{$d->angkatan}}</td>
                            
                        </tr>
                        @endforeach
                    </table> --}}
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@endsection
