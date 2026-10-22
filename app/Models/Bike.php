<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bike extends Model
{
    use HasFactory;

    protected $table = 'bikes';

    protected $fillable = [
        'brand',
        'type',
        'rent_price',
        'gear_count',
        'image',
        'available',
    ];
}
