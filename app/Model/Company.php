<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
       'name', 'owner_name','email', 'enquiry_email', 'mobile', 'landline', 'fax', 'whatsapp_number', 'call_number','office_address', 'contact_address', 'contact_state', 'contact_city', 'contact_pincode', 'contact_country', 'contact_website', 'catelog_url', 'copyright', 'design_and_develope', 'design_and_develope_url', 'skype_link', 'facebook_link', 'youtube_link', 'insta_link', 'twitter_link', 'linkdin_link', 'google_map', 'status', 
       
    ];
}
