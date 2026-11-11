<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
   
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
      'name', 'image', 'url', 'short_description', 'long_description', 'meta_title', 'meta_description', 'meta_keywords', 'is_popular', 'is_featured', 'is_hot', 'is_best', 'is_new_arraival', 'is_special_offer', 'set_as_home', 'status', 
       
    ];
}
