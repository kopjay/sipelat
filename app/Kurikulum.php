<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kurikulum extends Model
{
    use softDeletes;

    protected $table = 'kurikulum';

    protected $fillable = ['type_id', 'nama'];

    protected $dates = ['deleted_at'];
}
