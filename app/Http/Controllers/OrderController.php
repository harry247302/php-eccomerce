<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cmspage;
use App\Model\Service;
use App\Model\Product;
use App\Model\Company;
use App\Model\Category;
use App\Model\Subcategory;

class OrderController extends Controller
{
   public function index(Request $request, $id){
       
     $product = Subcategory::where('id',$id)->first();
     $price = $request->product_price;   
       return view('order_product',compact('product','price'));
      
   }
   
    public function order_category($url){
       
     $cat_details =  Category::where('url',$url)->where('status','enable')->first();
     $company = Company::where('status','enable')->first();
      return view('order_category',compact('cat_details','company'));
   }
   
   
   public function order_service($url){
       
     $ser_details =  Service::where('url',$url)->where('status','enable')->first();
     $company = Company::where('status','enable')->first();
      return view('order_service',compact('ser_details','company'));
   }
}
