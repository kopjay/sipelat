<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pejabat extends Model
{
    use softDeletes;

    protected $table = 'pejabat';

    protected $fillable = ['jenis_id','nama', 'nip','jabatan','alamat','pangkat','no_sk','tgl_sk'];

    protected $dates = ['deleted_at'];

}
