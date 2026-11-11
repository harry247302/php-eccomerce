<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Banner;
use App\Model\Story;
use App\Model\Image;
use App\Model\Company;
use App\Model\How;
use App\Model\Subcategory;
use App\Model\Category;
use App\Model\Client;
use App\Model\Service;
use App\Model\Why;
use App\Model\Subservice;
use App\Model\Product;
use App\Model\Project;
use App\Model\Blog;
use App\Model\Testimonial;
use App\Model\Cmspage;
use App\Model\Team;
use App\Model\Package;
use App\Model\Visitor;
use App\Model\Seoranking;
use App\Classes\BrowserDetection;
use App\Classes\Mobile_Detect;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     
     */
   
    
    public function index()  
    {
        //classes for browser detection and mobile detection
       $browser=new BrowserDetection();
       $detect=new Mobile_Detect();
        
        //getting browser details
        $browser_name=$browser->getName();
        $browser_version=$browser->getVersion();
        //getting device details
        if($detect->isMobile()){
            $type='Mobile';
        }elseif($detect->isTablet()){
            $type='Tablet';
        }else{
            $type='PC';
        }
        //getting os details
        if($detect->isiOS()){
            $os='IOS';
        }elseif($detect->isAndroidOS()){
            $os='Android';
        }else{
            $os='Window';
        }
        //getting current url
        $url=(isset($_SERVER['HTTPS'])) ? "https":"http";
        $url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //getting reeferre or come from link url
        $ref='';
        if(isset($_SERVER['HTTP_REFERER'])){
            $ref=$_SERVER['HTTP_REFERER'];
        }
        //insert details into visitors table
          Visitor::create([
              'browser_name', 'browser_version', 'type', 'os', 'url', 'ref', 'added_on',
                                    'browser_name' => $browser_name,
                                    'browser_version' => $browser_version,
                                    'type' => $type,
                                    'os' => $os,
                                    'url' => $url,
                                    'ref' => $ref,
                                ]);
        
         
        $banner = Banner::where('status','enable')->get();
        
        $home = Cmspage::where('page_status','enable')->Where('url', 'like', '%' . 'Home' . '%')->first();
        
        $about = Cmspage::where('page_status','enable')->Where('url', 'like', '%' . 'about' . '%')->first();
        
       
        $company = Company::where('status','enable')->first(); 
        
        $services = Service::where('status','enable')->get();
        $popular_services = Service::where('status','enable')->where('is_popular','yes')->get();
        $featured_services = Service::where('status','enable')->where('is_featured','yes')->get();
     
          
        $subservices = Subservice::where('status','enable')->get();
        $subservices_four = Subservice::where('status','enable')->skip(0)->take(4)->get();
        
        $cats = Category::where('status','enable')->get();
        $featured_cats = Category::where('status','enable')->where('is_featured','yes')->get();
        $best_cats = Category::where('status','enable')->where('is_best','yes')->get();
        
        $featured_subcats = Subcategory::where('status','enable')->where('is_featured','yes')->get();
        $best_subcats = Subcategory::where('status','enable')->where('is_best','yes')->get();
        $popular_subcat = Subcategory::where('status','enable')->where('is_popular','yes')->get();
        $latest_subcat = Subcategory::where('status','enable')->where('is_new_arraival','yes')->get();
        
        $products_four = Product::where('product_status','enable')->skip(0)->take(4)->get();
        $products = Product::where('product_status','enable')->get();
        $featured_pro = Product::where('product_status','enable')->where('is_featured','yes')->get();
        $new_pro = Product::where('product_status','enable')->where('is_new_arraival','yes')->get();
        $hot_pro = Product::where('product_status','enable')->where('is_hot','yes')->get();
        $best_pro = Product::where('product_status','enable')->where('is_best','yes')->get();
        
        $projects_featured = Project::where('status','enable')->where('is_featured','yes')->get();
        $projects = Project::where('status','enable')->get();
        
        $galleries = Image::where('status','enable')->where('set_as_home','yes')->get(); 
        
        $testimonials = Testimonial::where('status','enable')->get(); 
        
        $clients = Client::where('status','enable')->get();
        
        $blogs = Blog::where('status','enable')->get(); 
        
        $why1 = Why::where('status','enable')->skip(0)->take(4)->get();
        $why2 = Why::where('status','enable')->skip(4)->take(4)->get();
        
        $teams = Team::where('status','enable')->get();
        
        $packages = Package::where('status','enable')->get();
        
        $how = How::where('status','enable')->orderBy('order_by','ASC')->get();
        
        $seorankings_pro = Project::where('status','enable')->where('show_in','seoranking')->get();
       
      
       return view('home',compact('banner','home','about','company','services','popular_services','featured_services','subservices','subservices_four','cats','featured_cats','best_cats','featured_subcats','best_subcats','latest_subcat','popular_subcat','products_four','products','featured_pro','new_pro','hot_pro','best_pro','projects_featured','projects','galleries','testimonials','clients','blogs','why1','why2','teams','packages','how','seorankings_pro'));
    }
    
 
}