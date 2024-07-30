<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;


    protected $fillable = [
        'booking_date',
        'check_in_date',
        'check_out_date',
        'total_price',
        'status',
    ];
}
