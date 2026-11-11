<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Testimonial extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
       'title', 'url','content', 'image', 'work_profile', 'order_by', 'video', 'thumbnail', 'status',
        
       
    ];
}
