<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penyelenggara extends Model
{
    use softDeletes;

    protected $table = 'penyelenggara';

    protected $fillable = ['pelatihan_id','nama','kedudukan','jabatan'];

    protected $dates = ['deleted_at'];

}
