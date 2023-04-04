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
                        <h3 class="card-label">Formulir Kesediaan
                    </div>
                    <div class="card-toolbar">
                        
                       
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/formdaftar/store') }}">
                        @csrf
                        <div class="modal-body">
                            <b>DATA PRIBADI</b> <br>
                            <div class="form-group">
                                <label>Nama Lengkap (berikut gelar pendidikan)</label>
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="Nama">
                                {{-- <span class="form-text text-muted">Isi nama pasien</span> --}}
                                
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gender</label> <br>
                                <input name="gender" type="radio" value="Pria"> Pria <br>
                                <input name="gender" type="radio" value="Wanita"> Wanita <br>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip">
                                
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tempat & Tanggal Lahir</label>
                                <input id="ttl" type="text" class="form-control @error('ttl') is-invalid @enderror" name="ttl" value="{{ old('ttl') }}" required autocomplete="ttl">
                                
                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat Rumah</label>
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                                
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Telepon/HP</label>
                                <input id="telepon" type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon">
                                
                                @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pendidikan</label> <br>
                                <input name="pendidikan" type="radio" value="SMA/SMK"> SMA/SMK dan setara <br>
                                <input name="pendidikan" type="radio" value="D2"> D2 <br>
                                <input name="pendidikan" type="radio" value="D3"> D3 <br>
                                <input name="pendidikan" type="radio" value="S1"> S1 <br>
                                <input name="pendidikan" type="radio" value="S2"> S2 <br>
                                <input name="pendidikan" type="radio" value="S3"> S3 <br>

                            </div>
                            <div class="form-group">
                                <label>Bidang Studi</label>
                                <input id="studi" type="text" class="form-control @error('studi') is-invalid @enderror" name="studi" value="{{ old('studi') }}" required autocomplete="studi">
                                
                                @error('studi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           

                            <div class="form-group">
                                <label>Agama</label>
                                <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama">
                                
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Istri/Suami(berikut gelar pendidikan)</label>
                                <input id="istrisuami" type="text" class="form-control @error('istrisuami') is-invalid @enderror" name="istrisuami" value="{{ old('istrisuami') }}" required autocomplete="istrisuami">
                                
                                @error('istrisuami')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Olahraga Kegemaran</label>
                                <input id="olahraga" type="text" class="form-control @error('olahraga') is-invalid @enderror" name="olahraga" value="{{ old('olahraga') }}" required autocomplete="olahraga">
                                
                                @error('olahraga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Informasi Lain</label>
                                <select name="informasi" id="informasi" class="form-control">
                                    <option value="Merokok">Merokok</option>
                                    <option value="Tidak Merokok">Tidak Merokok</option>
                                 </select>
                            </div>
                            
                           <b>DATA INSTANSI </b> <br>
                            <div class="form-group">
                                <label>Instansi</label>
                                <input id="instansi" type="text" class="form-control @error('instansi') is-invalid @enderror" name="instansi" value="{{ old('instansi') }}" required autocomplete="instansi">
                            </div>
                            <div class="form-group">
                                <label>Jabatan/Eselon</label>
                                <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" required autocomplete="jabatan">
                            </div>
                            <div class="form-group">
                                <label>Pangkat/Golongan</label>
                                <input id="pangkat" type="text" class="form-control @error('pangkat') is-invalid @enderror" name="pangkat" value="{{ old('pangkat') }}" required autocomplete="pangkat">
                            </div>
                            <div class="form-group">
                                <label>Alamat Kantor</label>
                                <input id="alamat_kantor" type="text" class="form-control @error('alamat_kantor') is-invalid @enderror" name="alamat_kantor" value="{{ old('alamat_kantor') }}" required autocomplete="alamat_kantor">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input id="telepon_kantor" type="text" class="form-control @error('telepon_kantor') is-invalid @enderror" name="telepon_kantor" value="{{ old('telepon_kantor') }}" required autocomplete="telepon_kantor">
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') }}" required autocomplete="fax">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email_kantor" type="email" class="form-control @error('email_kantor') is-invalid @enderror" name="email_kantor" value="{{ old('email_kantor') }}" required autocomplete="email_kantor">
                            </div>

                            <div class="form-group">
                                "Dengan ini menyatakan telah memiliki kemampuan teknologi informasi yang diperlukan untuk pembelajaran distance learning dan menyatakan kesediaan untuk mengikuti Pelatihan Kepemimpinan
                                <input name="pelatihan" type="text"> Angkatan <input name="angkatan" type="text"> beserta rangkaiannya di Pusat Pengebangan SDM Aparatur Pehubungan seacara penu dan mengikuti semua ketentuan yang berlaku
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@endsection
