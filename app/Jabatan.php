<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jabatan extends Model
{
    use softDeletes;

    protected $table = 'jabatan';

    protected $fillable = ['nama'];

    protected $dates = ['deleted_at'];

}
