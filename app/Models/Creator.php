<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_creator';

    protected $fillable = [
        'no_rek',
        'nama_bank',
        'nama_rek',
    ];
}
