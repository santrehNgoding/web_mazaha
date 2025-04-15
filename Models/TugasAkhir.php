<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TugasAkhir extends Model
{
    public $timestamps = false;
    protected $table = 'tugasakhir';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'file',
        'link',
        'name',
        'jurusan',
        'tahun',
        'deskripsi',
       ];
}