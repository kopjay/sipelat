<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluasi extends Model
{
    use softDeletes;

    protected $table = 'evaluasi';

    protected $fillable = ['pelatihan_id', 'nama', 'nip', 'nilai'];

    protected $dates = ['deleted_at'];
}
