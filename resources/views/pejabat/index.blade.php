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
                                    Data Pejabat
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                {{-- <a href="#" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#tambahPelatihan">
                                    <i class="flaticon2-plus"></i> Tambah Data
                                </a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->
                            <!--begin::Accordion-->
                            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionPKN">
                                @foreach($data as $p)
                                <div class="card">
                                    <div class="card-header" id="headingOne7">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsePKNheader{{$p->id}}">
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
                                            <div class="card-label pl-4">{{$p->jabatan}}</div>
                                        </div>
                                    </div>
                                    <div id="collapsePKNheader{{$p->id}}" class="collapse" data-parent="#accordionPKN">
                                        <div class="card-body pl-12">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-3">Nama</label> : {{$p->nama}}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-3">Jabatan</label> : {{$p->jabatan}}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-3">Alamat</label> : {{$p->alamat}}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-3">NIP</label> : {{$p->nip}}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-3">Pangkat & Golongan</label> : {{$p->pangkat}}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group float-right">
                                                    <a href="#" class="btn btn-sm btn-warning font-weight-bold" data-toggle="modal" data-target="#editPejabat{{$p->id}}">
                                                        <i class="flaticon2-edit"></i> Edit
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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

@foreach($data as $jd)
	<div class="modal fade" id="editPejabat{{$jd->id}}" tabindex="-1" role="dialog" aria-labelledby="editPejabat_title" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<form action="{{url('/pejabat/update')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="{{$jd->id}}">
                <input type="hidden" name="jenis_id" value="{{$jd->jenis_id}}">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modal_kegiatan_title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<div class="modal-body">
						<div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="nama" value="{{$jd->nama}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="jabatan" value="{{$jd->jabatan}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="alamat" value="{{$jd->alamat}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="nip" value="{{$jd->nip}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pangkat & Golongan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="pangkat" value="{{$jd->pangkat}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No.SK</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="no_sk" value="{{$jd->no_sk}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal.SK</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" required name="tgl_sk" value="{{$jd->tgl_sk}}">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endforeach

@endsection
