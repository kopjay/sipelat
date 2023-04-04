<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelatihan extends Model
{
    use softDeletes;

    protected $table = 'pelatihan';

    protected $fillable = ['pelatihan_header_id','nama'];

    protected $dates = ['deleted_at'];

    public function jadwal()
    {
        return $this->hasMany('App\Jadwal', 'pelatihan_id')->orderBy('tgl');
    }

    public function penyelenggara()
    {
        return $this->hasMany('App\Penyelenggara', 'pelatihan_id');
    }

    public function evaluasi()
    {
        return $this->hasMany('App\Evaluasi', 'pelatihan_id');
    }

}
