<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pack extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pack_title',
        'description',
        'pack_img',
        'price',
        'places_number',
        'starting_date',
        'end_date',
    ];
}
