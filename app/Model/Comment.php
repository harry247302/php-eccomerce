<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
      'user_name', 'comment', 'comment_on', 'comment_on_id', 'stars', 'status',
        
       
    ]; 
} 
