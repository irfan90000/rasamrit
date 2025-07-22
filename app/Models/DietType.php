<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DietType extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'goal' => 'array',
    ];

    public function getFood(){
        return $this->hasMany(FoodMenu::class, 'diet_type', 'id');
    }
}
