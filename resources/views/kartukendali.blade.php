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
                                    <?php  $time = strtotime(Request::segment(2).'/1/2023');?>

                                    Kartu Kendali & Daftar Honor bulan {{\Carbon\Carbon::parse($time)->isoFormat('MMMM Y')}}
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                {{-- <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahDataModal">
                                    <i class="flaticon2-plus"></i> Tambah Data
                                </a> --}}

                                {{-- bulan --}}
                                <select name="" id="" class="btn btn-sm btn-primary font-weight-bold" onchange="location = this.value;">
                                    @for($x = 1; $x <= 12; $x++)
                                    <?php $value = str_pad($x,2,"0",STR_PAD_LEFT); $month = date('F', mktime(0, 0, 0, $x, 10));  ?>
                                        <a href="{{url('/')}}">
                                            <option value="{{$value}}" @if($value == Request::segment(2)) selected @else @endif>{{$month}}</option>
                                        </a>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->

                            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th title="Field #1">No</th>
                                        <th title="Field #2">Nama</th>
                                        <th title="Field #9">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;   
                                    @endphp

                            		@if(Auth::user()->jabatan == 1)
                                        @foreach($user as $a)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$a->name}}</td>
                                            <td>
                                                <a href="{{url('kartukendali/'.Request::segment(2).'/2023/'.$a->id)}}" class="btn btn-sm btn-clean btn-icon mr-2" style="width: 150px;">
                                                    {{-- <a class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="modal" data-target="#opModalEdit{{$a->id}}"> --}}
                                                    <i class="fa fa-eye"> </i> Lihat Kartu Kendali
                                                </a>
                                                <a href="{{url('honor/'.Request::segment(2).'/2023/'.$a->id)}}" class="btn btn-sm btn-clean btn-icon mr-2" style="width: 150px;">
                                                    {{-- <a class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="modal" data-target="#opModalEdit{{$a->id}}"> --}}
                                                    <i class="fa fa-book"> </i> Lihat Honor
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{Auth::user()->name}}</td>
                                        <td>
                                            <a href="{{url('kartukendali/'.Request::segment(2).'/2023/'.Auth::user()->id)}}" class="btn btn-sm btn-clean btn-icon mr-2" style="width: 150px;">
                                                {{-- <a class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="modal" data-target="#opModalEdit{{Auth::user()->id}}"> --}}
                                                <i class="fa fa-eye"> </i> Lihat Kartu Kendali
                                            </a>
                                            <a href="{{url('honor/'.Request::segment(2).'/2023/'.Auth::user()->id)}}" class="btn btn-sm btn-clean btn-icon mr-2" style="width: 150px;">
                                                {{-- <a class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="modal" data-target="#opModalEdit{{Auth::user()->id}}"> --}}
                                                <i class="fa fa-book"> </i> Lihat Honor
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                    
                                </tbody>
                            </table>

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

@endsection
