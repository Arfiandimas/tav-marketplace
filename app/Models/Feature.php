<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'feature';

    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_default' => 'boolean',
    ];

    public function getIconAttribute() {
        if (isset($this->attributes['icon']) && $this->attributes['icon']) {
            return request()->getSchemeAndHttpHost().'/storage/feature-icon/'.$this->attributes['icon'];
        }
        return null;
    }
}
