<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use softDeletes;

    protected $table = 'jadwal';

    protected $fillable = ['pelatihan_id', 'mata_pelatihan', 'tgl', 'waktu_mulai', 'waktu_akhir', 'jp', 'narasumber', 'user_id', 'async','type'];

    protected $dates = ['deleted_at'];

    public function pelatihan()
    {
        return $this->belongsTo('App\Pelatihan', 'pelatihan_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
