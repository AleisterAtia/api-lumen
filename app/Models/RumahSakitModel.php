<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakitModel extends Model
{
    protected $table = 'data_rumahsakit';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'nama_rs',
        'alamat',
        'no_telp',
        'tipe_rs',
        'lat',
        'lng'
    ];
}
