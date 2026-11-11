<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\Image;
use App\Model\Subcategory;
use App\Model\Service;
use App\Model\Cmspage;
use App\Model\Company;

class CategoryController extends Controller
{
    public function index($url){
          $categories =  Category::where('status','enable')->get();
          $category =  Category::where('url',$url)->where('status','enable')->first();
         $pages_prod = Cmspage::Where('url', 'like', '%' . 'category' . '%')->where('page_status','enable')->first();
         $subcat =  Subcategory::where('status','enable')->where('category_id',$category->id)->get();
         //$products =  Product::where('product_status','enable')->where('category_id',$category->id)->get();
         $company =  Company::where('status','enable')->first();
        return view('category_all',compact('categories','category','company','pages_prod','subcat'));
        
    }
    
    public function subcategory($url){
        $pages_prod = Cmspage::Where('url', 'like', '%' . 'category' . '%')->where('page_status','enable')->first();
        $subcate = Subcategory::where('url',$url)->where('status','enable')->first();
        $products = Product::where('product_status','enable')->where('subcategory_id',$subcate->id)->get();
        $company =  Company::where('status','enable')->first();    
        $images = Image::where('product_id',$subcate->id)->get();
        $subcats = Subcategory::where('status','enable')->get();
       
        
        return view('subcategory_view',compact('pages_prod','subcate','products','company','images','subcats'));
    }
}



// asdf