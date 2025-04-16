<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class PrestasiOlimpiade extends Model
{
    public $timestamps = false;
    protected $table = 'prestasi_olimpiade';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'file',
        'tahun',
        'berita',
        'created_at',
       ];
}