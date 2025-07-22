<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodMenu extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'menu' => 'array',
    ];

    public function getDiet()
    {
        return $this->belongsTo(DietType::class, 'diet_type', 'id');
    }
}
