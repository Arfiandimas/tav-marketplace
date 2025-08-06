<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'inspection_category';

    protected $guarded = ['id'];
}
