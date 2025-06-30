<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    protected $table = 'kampus_tables';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'nama',
        'alamat',
        'notelp',
        'kategori',
        'lat',
        'lng',
        'jurusan'
    ];
}
