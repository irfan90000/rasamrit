<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodSubscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'plan_detail'   => 'array',
        'meal_type'     => 'array',
    ];

    public function getGoal()
    {
        return $this->belongsTo(Goal::class, 'goal', 'id');
    }
    public function getDietType()
    {
        return $this->belongsTo(DietType::class, 'diet_type', 'id');
    }
    public function getPlan()
    {
        return $this->belongsTo(FoodPlan::class, 'plan', 'id');
    }
}
