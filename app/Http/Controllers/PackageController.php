<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Package;
use App\Model\Cmspage;


class PackageController extends Controller
{
   public function index(){
       $pages_package = Cmspage::Where('url', 'like', '%' . 'packages' . '%')->where('page_status','enable')->first();
       $packages =  Package::where('status','enable')->get();
         
        return view('packages',compact('packages','pages_package'));
     }
    
    
}
