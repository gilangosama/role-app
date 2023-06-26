<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_apk',
        'versi',
        'nomor_sk',
        'tahun_sk',
        'kondisi',
        'alasan',
        'nama_admin',
        'nomor_wa',
        'email',
        'jumlah_pengguna',
        'uraian',
        'sop',
        'pemilik',
        'tampilan',
        'video_tampilan',
        'pelatihan',
        'rapat',
        'bug',
        'kendala',
    ];
    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
