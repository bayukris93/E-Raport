<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    //
    protected $table = 'guru';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nip', 'nama_guru'
    ];
}
