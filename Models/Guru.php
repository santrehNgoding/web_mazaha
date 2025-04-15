<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Guru extends Model
{
    public $timestamps = false;
    protected $table = 'guru';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'NamaGuru',
        'alamat',
        'Profil',
        'Bidang',
        'tahun',
        'Motto',
        'Telegram',
        'Email',
        'noHp',
    ];
}