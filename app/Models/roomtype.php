<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomtype extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'is_public',
        'price_per_night',
        'room_quanlity',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
