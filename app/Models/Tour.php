<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'title', 'slug', 'description',
        'vehicle', 'price', 'start_date', 'end_date',
        'duration', 'image', 'tour_from', 'tour_to',
        'quantity', 'promotion', 'status'
    ];

    // Mối quan hệ với Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
