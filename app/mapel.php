<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table = 'mapel';

    protected $fillable = [
        'kd_mapel', 'nama_mapel', 'pengajar'
    ];

    public function siswa()
    {
        return $this->belongsToMany(siswa_model::class)->withPivot('siswa_id', 'mapel_id', 'nilai')->withTimestamps();
    }

    public function mapel()
    {
        // Setiap user akan memiliki banyak data
        return $this->hasMany(mapel::class, 'user_id');
    }
}
