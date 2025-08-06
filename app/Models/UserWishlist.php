<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserWishlist extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_wishlist';

    protected $guarded = ['id'];
}
