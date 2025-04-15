<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Instruktur extends Model
{
    public $timestamps = false;
    protected $table = 'instruktur';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'NamaGuru',
        'file',
        'alamat',
        'jabatan',
        'telegram',
        'instagram',
        'mapel'
    ];
}