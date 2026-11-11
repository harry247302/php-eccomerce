<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.products',compact('products'));
    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.product_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
      {
       $url =  str_replace(' ', '-',  $request->name);
        if($request->hasFile('main_image') && $request->hasFile('image'))
        {
                            $main_photo = $request->file('main_image'); 
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/products/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                  Product::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'image' => $main_name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                   'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
                 $last_product = Product::orderBy('id','desc')->first();
        
             
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/products/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'product',
                                           'product_id'=>$last_product['id'],
                                         ]);


                       }
                   }
            
        }elseif($request->hasFile('main_image') && !$request->hasFile('image')){
                       
            $main_photo = $request->file('main_image');
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/products/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                  Product::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'image' => $main_name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
        
          
        }elseif(!$request->hasFile('main_image') && $request->hasFile('image')){
                     Product::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
                 $last_product = Product::orderBy('id','desc')->first();
        
             
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/products/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'product',
                                           'product_id'=>$last_product['id'],
                                         ]);


                       }
                   }
        }elseif(!$request->hasFile('main_image') && !$request->hasFile('image')){
                    Product::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                   'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
        }
        
        
        return redirect('admin/products/')->with('success','Added Successfully');
                             
   
    }
/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::where('id',$id)->get();

        return view('admin.product_edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {
         $url =  str_replace(' ', '-',  $request->name);
        if($request->hasFile('main_image') && $request->hasFile('image'))
        {
                            $main_photo = $request->file('main_image'); 
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/products/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                  Product::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'image' => $main_name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                  'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
                 
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/products/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'product',
                                           'product_id'=>$id,
                                         ]);


                       }
                   }
            
        }elseif($request->hasFile('main_image') && !$request->hasFile('image')){
                       
            $main_photo = $request->file('main_image');
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/products/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                  Product::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'image' => $main_name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                   'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
        
          
        }elseif(!$request->hasFile('main_image') && $request->hasFile('image')){
                     Product::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                     'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/products/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'product',
                                           'product_id'=>$id,
                                         ]);


                       }
                   }
        }elseif(!$request->hasFile('main_image') && !$request->hasFile('image')){
                    Product::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'subcategory_id' => $request->subcategory_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price' => $request->price,
                                    'minimum_order_amount' => $request->minimum_order_amount,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'stock_status' => $request->stock_status,
                                    'product_status' => $request->product_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                   'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
        }
        
        
   
           return back()->with('success',' Updated Succefully !!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Product::where('id',$id)->delete();
         return redirect()->route('products.index')->with('success','Deleted !!');
        
    }
    
     public function destroy_pro_image($id){
        Image::where('id',$id)->delete();
        return redirect()->route('services.index')->with('success','Image Deleted Only !!');
    }
    
    
    
     
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Product::where('id',$row)->delete();
        }
        return redirect()->route('products.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'product_status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'product_status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    public function setPopularAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'is_popular' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    
    public function setFeatureAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'is_featured' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    
    public function setHotAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'is_hot' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    
    public function setBestAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'is_best' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    
    public function setNewAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'is_new_arraival' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    
    public function setOfferAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'is_special_offer' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    
    public function setHomeAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Product::where('id',$row)->update([
                                    'set_as_home' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('products.index')->with('success','Updated !!');
    }
    
    
    
}
