@extends('layouts.headForm')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
   
    <!--end::Modal-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Formulir Kesediaan
                    </div>
                    <div class="card-toolbar">
                        
                       
                    </div>
                </div>
                <div class="card-body">
                    <div style="text-align: center">
                    Data Berhasil Disimpan <br>
                    <a href="{{url('/formdaftar')}}"> buat data lain</a>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@endsection
