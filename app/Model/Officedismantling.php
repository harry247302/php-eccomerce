<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Officedismantling extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
      'title', 'description', 'image', 'extra_image', 'meta_title', 'meta_description', 'meta_keywords',
        
       
    ];
}
