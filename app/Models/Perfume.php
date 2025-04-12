<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image_path',
        'price',
        'old_price',
        'size',
        'category',
        'description',
        'available_quantity'
    ];
    protected $casts = [
        'category' => 'array',
    ];
    protected function getImagePathAttribute()
    {
        return asset($this->attributes['image_path']);
    }
}
