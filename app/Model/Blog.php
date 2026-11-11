<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
       'name', 'url', 'short_description', 'long_description', 'image', 'meta_title', 'meta_description', 'meta_keywords', 'order_by', 'set_as_home','status', 
        
       
    ];
}
