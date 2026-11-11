<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Team extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
       'name', 'designation', 'image', 'facebook_link', 'twitter_link', 'insta_link', 'linkedin_link', 'status', 'order_by',
        
       
    ];
}
