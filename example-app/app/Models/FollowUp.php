<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'weight',
        'waist_size',
        'abdominal_size',
        'chest_size',
        'thigh_size_r',
        'thigh_size_l',
        'arm_size_r',
        'arm_size_l',
        'calf_size_r',
        'calf_size_l',
        'side_1',
        'side_2',
        'side_3',
        'side_4',
        'steps_per_day',
        'diet_comit',
        'cardio_comit',
        'training_comit',
        'training_diff',
        'cheat_meal',
        'diet_edit',
        'sleeping_hrs',
        'progress'
    ];
}
