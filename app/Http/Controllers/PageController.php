<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cmspage;
use App\Model\Service;
use App\Model\How;
use App\Model\Company;
use App\Model\Testimonial;
use App\Model\Client;
use App\Model\Team;
use App\Model\Seoranking;
use App\Model\Project;

class PageController extends Controller
{
   public function index($url){
       
       if($url == 'Contact-Us'){
           $company = Company::where('status','enable')->first();
           $services = Service::where('status','enable')->get();
           $pages_contact = Cmspage::Where('url', 'like', '%' . 'contact' . '%')->where('page_status','enable')->first();
         // print_r($services);
             return view('contact_us',compact('pages_contact','company','services'));
       }
    
       if($url == 'About-Us'){   
             $pages_about = Cmspage::Where('url', 'like', '%' . 'about' . '%')->where('page_status','enable')->first();
             $company = Company::where('status','enable')->first();
             $testimonials = Testimonial::where('status','enable')->get(); 
             $clients = Client::where('status','enable')->get();
             $teams = Team::where('status','enable')->get();
             return view('about_us',compact('pages_about','company','testimonials','clients','teams'));
       }
       
       
       if($url == 'Enquiry'){   
       $pages_enquiry = Cmspage::Where('url', 'like', '%' . 'enquiry' . '%')->where('page_status','enable')->first();
             $company = Company::where('status','enable')->first();
             return view('enquiry',compact('pages_enquiry','company'));
       }
       
      
   }
    
    
    
    function all_seoranking(){
         $company = Company::where('status','enable')->first();
        $seorankings_pro = Project::where('status','enable')->where('show_in','seoranking')->get();
        return view('seorankings',compact('seorankings_pro','company'));
    }
    
    function appointment(){
         $pages_about = Cmspage::Where('url', 'like', '%' . 'about' . '%')->where('page_status','enable')->first();
        return view('appointment',compact('pages_about'));
    }
}
