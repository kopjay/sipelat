<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SD extends Model
{
    use softDeletes;

    protected $table = 'SD';

    protected $fillable = ['no_sop','nama', 'file', 'tgl_revisi', 'no_revisi','id_jenis'];

    protected $dates = ['deleted_at'];

}
