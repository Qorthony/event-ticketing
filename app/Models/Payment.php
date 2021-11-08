<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_payment';

    protected $fillable = [
        'nama_pengirim',
        'no_rek',
        'bank_pengirim',
        'bukti_payment',
        'tgl_payment'
    ];

    protected $casts = [
        'tgl_payment' => 'datetime',
    ];
}
