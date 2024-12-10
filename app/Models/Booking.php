<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'name',
        'email',
        'phone',
        'adults',
        'children',
        'note',
        'total_price',
        'status'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
