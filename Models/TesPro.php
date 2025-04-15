<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TesPro extends Model
{
    public $timestamps = false;
    protected $table = 'testimoni_prodistik';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'created_at',
        'nama',
        'foto',
        'tahun_lulus',
        'jurusan',
        'testimoni',
       ];
}