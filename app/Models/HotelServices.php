<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelServices extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "service_name",
        "description",
        "price",
        "hotel_id"
    ];
}
