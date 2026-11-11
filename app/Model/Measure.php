<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Measure extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
  'order_number', 'type_of_dress', 'shirt_dot_length', 'shirt_waist_line', 'shirt_length', 'shirt_breast', 'shirt_upper_chest', 'shirt_waist', 'shirt_stomach', 'shirt_hip', 'shirt_sholuder', 'shirt_sleeves', 'shirt_sleeves_bottom', 'shirt_neck_front', 'shirt_neck_back', 'shirt_arm_hole', 'shirt_slits', 'shirt_ghera', 'pant_thighs', 'pant_knee', 'pant_bottom', 'pant_length', 'pant_inseam_length', 'pant_waist', 'pant_croach', 'salwar_length', 'salwar_bottom', 'salwar_waist', 'chooridaar_length', 'chooridaar_thigh', 'chooridaar_knee', 'chooridaar_calf', 'chooridaar_bottom', 'chooridaar_waist', 'lhenga_length', 'lhenga_waist', 'lhenga_high_waist', 'lhenga_lower_waist', 'lhenga_hip', 'user_name', 'user_number', 'user_address', 'status',
        
       
    ];
}
