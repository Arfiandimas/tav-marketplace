<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionSubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'inspection_sub_category';

    protected $guarded = ['id'];
}
