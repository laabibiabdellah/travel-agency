<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'hotel_name',
        'description',
        'hotel_img',
        'starts',
        'room_count',
        'city',
        'address',
        'phone_number',
        'min_price'
    ];
}
