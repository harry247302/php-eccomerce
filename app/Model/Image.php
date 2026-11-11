<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Image extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
       'name', 'category', 'image', 'alternative_text', 'status', 'product_id', 'set_as_home',
        
       
    ];
}
