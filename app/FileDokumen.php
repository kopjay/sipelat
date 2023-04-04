<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileDokumen extends Model
{
    use softDeletes;

    protected $table = 'file_dokumen';

    protected $fillable = ['spm_id', 'nama', 'file'];

    protected $dates = ['deleted_at'];

}
