<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class FoodProgram extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'vegetarian' => 'array',
        'nonvegetarian' => 'array',
        'eggetarian'    => 'array',
    ];

    public function getPlan()
    {
        return $this->belongsTo(FoodPlan::class, 'plan');
    }

    public function getGoal()
    {
        return $this->belongsTo(Goal::class, 'goal', 'id');
    }
}
