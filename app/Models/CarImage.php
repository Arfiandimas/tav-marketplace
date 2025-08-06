<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'car_image';

    protected $guarded = ['id'];
}
