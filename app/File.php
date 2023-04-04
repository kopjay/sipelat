<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use softDeletes;

    protected $table = 'file';

    protected $fillable = ['nama', 'file', 'id_jenis'];

    protected $dates = ['deleted_at'];

}
