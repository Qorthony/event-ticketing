<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_order';

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
