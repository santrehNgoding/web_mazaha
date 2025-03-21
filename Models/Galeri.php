<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Galeri extends Model
{
    public $timestamps = false;
    protected $table = 'galeri';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'file',
        'title',
        'kategori',
        'created_at',
        'keterangan'
       ];
}
