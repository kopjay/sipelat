<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggaran extends Model
{
    use softDeletes;

    protected $table = 'anggaran';

    protected $fillable = ['anggaran', 'honor_pengajar'];

    protected $dates = ['deleted_at'];
}
