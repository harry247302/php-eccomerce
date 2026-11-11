<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
       'title', 'project_url', 'category_id', 'url','content', 'image','meta_title', 'meta_description', 'meta_keywords', 'is_popular', 'is_featured', 'is_hot', 'is_best', 'is_new_arraival', 'is_special_offer', 'set_as_home', 'order_by', 'show_in', 'status',
        
       
    ];
}
