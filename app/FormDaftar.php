<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormDaftar extends Model
{
    use softDeletes;

    protected $table = 'formdaftar';

    protected $fillable = ['nama', 'gender','nip','ttl','alamat','email','telepon','pendidikan','studi','agama','istrisuami','olahraga','informasi','instansi','jabatan','pangkat','alamat_kantor','telepon_kantor','fax','email_kantor','pelatihan','angkatan'];

    protected $dates = ['deleted_at'];
}
