<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $table = 'images';
    protected $fillable = [
        'name',
        'path',
    ];

    public function roomTypes()
    {
        return $this->hasMany(RoomType::class, 'image_id');
    }
}
