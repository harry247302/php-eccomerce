<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Subcategory;
use App\Model\Company;
use App\Model\Cmspage;
use App\Model\Image;

class ProductController extends Controller
{
     public function index($url){
      
        $product = Product::where('url',$url)->where('product_status','enable')->first();
         $images =  Image::where('name','like','%'.'product'.'%')->where('product_id',$product->id)->where('status','enable')->get();    
        $pages_prod = Cmspage::Where('url', 'like', '%' . 'product' . '%')->where('page_status','enable')->first();
        $company = Company::where('status','enable')->first();
         return view('product_view',compact('product','company','images','pages_prod'));
     }
}
