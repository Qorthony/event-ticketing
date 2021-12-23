<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_order';

    protected $fillable = [
        'id_order',
        'tgl_order',
        'status_order',
        'user_id',
        'event_id',
        'payment_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
