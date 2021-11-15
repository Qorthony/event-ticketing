<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_event';

    protected $fillable = [
        'nama_event',
        'jenis_event',
        'tgl_event',
        'lokasi',
        'harga',
        'kuota',
        'poster_url',
        'deskripsi',
        'penyelenggara',
        'status_verifikasi',
        'admin_id',
        'creator_id',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // protected $casts = [
    //     'tgl_event' => 'datetime',
    // ];
}
