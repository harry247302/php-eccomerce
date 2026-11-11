<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
      'name', 'category_id', 'subcategory_id','url', 'short_description', 'long_description', 'image', 'additional_info', 'application', 'technical','price', 'minimum_order_amount', 'meta_title', 'meta_description', 'meta_keywords', 'stock_status', 'product_status', 'is_popular', 'is_featured', 'is_hot', 'is_best', 'is_new_arraival', 'is_special_offer', 'set_as_home',
       
    ];
}
