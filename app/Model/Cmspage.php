<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cmspage extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
       'name', 'url', 'meta_title', 'meta_description', 'meta_keywords', 'header_image', 'image', 'short_description', 'long_description', 'show_in', 'page_type', 'page_status',
        
       
    ];
}
