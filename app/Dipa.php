<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dipa extends Model
{
    use softDeletes;

    protected $table = 'dipa';

    protected $fillable = ['no_dipa','tahun_anggaran', 'tanggal'];

    protected $dates = ['deleted_at'];

}
