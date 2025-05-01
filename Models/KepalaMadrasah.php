<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class KepalaMadrasah extends Model
{
    public $timestamps = false;
    protected $table = 'kepala_madrasah';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'foto',
        'tahun_mulai',
        'tahun_selesai',
        'profil',
        'profil2',
    ];
}
