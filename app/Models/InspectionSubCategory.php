<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionSubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'inspection_sub_category';

    protected $guarded = ['id'];

    public function inspectionCategory(): BelongsTo
    {
        return $this->belongsTo(InspectionCategory::class, 'inspection_category_id', 'id');
    }
}
