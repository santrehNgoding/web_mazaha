<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Prestasi extends Model
{
    public $timestamps = false;
    protected $table = 'prestasi';
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
