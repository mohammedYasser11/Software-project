<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RegistrationData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'age',
        'height',
        'weight',
        'waist_size',
        'abdominal_size',
        'chest_size',
        'acitve_rate',
        'gym_per_week',
        'goal',
        'training_goal',
        'meals_no',
        'thigh_size_r',
        'thigh_size_l',
        'arm_size_r',
        'arm_size_l',
        'calf_size_r',
        'calf_size_l',
        'fat_source',
        'carb_source',
        'fruit_source',
        'vege_source',
        'supplements',
        'allergy',
        'food_disliked',
        'protien_source',
        'side_1',
        'side_2',
        'side_3',
        'side_4',
        'inbody',
    ];

}