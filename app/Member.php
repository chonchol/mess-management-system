<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = "meal_entry";
    protected $fillable = ['self_meal_breakfast', 'self_meal_lunch', 'self_meal_dinner','guest_meal_breakfast','guest_meal_lunch','guest_meal_dinner'];
}
