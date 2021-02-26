<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa_model extends Model
{
    //
    protected $table ='siswa';
    protected $fillable = [
        'nis', 'nama_siswa', 'ttl', 'tgl_lahir', 'agama', 'alamat'
    ];

    public function mapel(){
        return $this->belongsToMany(mapel::class)->withPivot('siswa_id','mapel_id','nilai')->withTimestamps();
    }
}
