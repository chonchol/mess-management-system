<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    //
    protected $table = "meal_entry";
    protected $fillable = ['self_meal_breakfast', 'self_meal_lunch', 'self_meal_dinner','guest_meal_breakfast','guest_meal_lunch','guest_meal_dinner'];

    public function getTotalBreakfastAttribute($value)
    {
        return $this->self_meal_breakfast + $this->guest_meal_breakfast;
    }

    public function getTotalLunchAttribute($value)
    {
        return $this->self_meal_lunch + $this->guest_meal_lunch;
    }

    public function getTotalDinnerAttribute($value)
    {
        return $this->self_meal_dinner + $this->guest_meal_dinner;
    }
    public function getTotalExtraMealAttribute($value)
    {
        return $this->extra_meal;
    }
    
    public function getTotalMealAttribute($value)
    {
        return $this->self_meal_breakfast + $this->guest_meal_breakfast + $this->self_meal_lunch + $this->guest_meal_lunch + $this->self_meal_dinner + $this->guest_meal_dinner + $this->extra_meal;
    }

}
