<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Story;
use App\Model\Service;
use App\Model\Subservice;
use App\Model\Company;
use App\Model\Cmspage;

class ServiceController extends Controller
{
   public function index($url){
         $pages_ser = Cmspage::Where('url', 'like', '%' . 'service' . '%')->where('page_status','enable')->first();
         $service =  Service::where('url',$url)->where('status','enable')->first();
         $services =  Service::where('status','enable')->get();
         $services_all =  Service::where('status','enable')->get();
         $subservices =  Subservice::where('status','enable')->where('service_id',$service->id)->get();
         $company =  Company::where('status','enable')->first();
      // $company = Company::where('status','enable')->first(); 
      //  print_r($service);
        return view('service_view',compact('service','services','company','services_all','subservices','pages_ser'));
     }
    
    public function all_services(){
       
       
         $services =  Service::where('status','enable')->get();
       
        return view('all_services',compact('services'));
     }
    
    
     public function subservice($url){
      $subservice = Subservice::where('url',$url)->where('status','enable')->first();
      $services =  Service::where('status','enable')->get();
      $main_service =  Service::where('status','enable')->where('id',$subservice->service_id)->first();
      $other_subservices =  Subservice::where('status','enable')->where('service_id',$main_service->id)->get();
      $company =  Company::where('status','enable')->first();
        return view('subservice_view',compact('subservice','services','other_subservices','company'));
    }
}
