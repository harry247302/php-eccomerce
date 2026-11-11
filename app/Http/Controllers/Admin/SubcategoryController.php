<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Image;
use App\Model\Subcategory;

class SubcategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_c = Subcategory::orderBy('id', 'desc')->get();
        return view('admin.subcategories',compact('sub_c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.subcategory_create');
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
                            $destinationPath = public_path('/images/subcategories/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                 Subcategory::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'image' => $main_name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                     'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
                 $last_product = Subcategory::orderBy('id','desc')->first();
        
             
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/subcategories/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'subcat',
                                           'product_id'=>$last_product['id'],
                                         ]);


                       }
                   }
            
        }elseif($request->hasFile('main_image') && !$request->hasFile('image')){
                       
            $main_photo = $request->file('main_image');
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/subcategories/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                 Subcategory::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'image' => $main_name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
        
          
        }elseif(!$request->hasFile('main_image') && $request->hasFile('image')){
                     Subcategory::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                   'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
                 $last_product = Subcategory::orderBy('id','desc')->first();
        
             
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/subcategories/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'subcat',
                                           'product_id'=>$last_product['id'],
                                         ]);


                       }
                   }
        }elseif(!$request->hasFile('main_image') && !$request->hasFile('image')){
                    Subcategory::create([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                      'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
            
        }
        
        
        return redirect('admin/subcategories/')->with('success','Added Successfully');
                             
   
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
        $subcategories = Subcategory::where('id',$id)->get();

        return view('admin.subcategory_edit',compact('subcategories'));
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
                            $destinationPath = public_path('/images/subcategories/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                   Subcategory::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'image' => $main_name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
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
                           $destinationPath = public_path('/images/subcategories/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'subcat',
                                           'product_id'=>$id,
                                         ]);


                       }
                   }
            
        }elseif($request->hasFile('main_image') && !$request->hasFile('image')){
                       
            $main_photo = $request->file('main_image');
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/subcategories/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                     Subcategory::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'image' => $main_name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                       'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                ]);
        
          
        }elseif(!$request->hasFile('main_image') && $request->hasFile('image')){
                       Subcategory::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
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
                           $destinationPath = public_path('/images/subcategories/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'subcat',
                                           'product_id'=>$id,
                                         ]);


                       }
                   }
        }elseif(!$request->hasFile('main_image') && !$request->hasFile('image')){
                       Subcategory::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category_id' => $request->category_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'additional_info' => $request->additional_info,
                                    'application' => $request->application,
                                    'technical' => $request->technical,
                                    'price_250' => $request->price_250,
                                    'price_500' => $request->price_500,
                                    'price_1000' => $request->price_1000,
                                    'price_2000' => $request->price_2000,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'status' => $request->status,
                                    'stock_status' => $request->stock_status,
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
          Subcategory::where('id',$id)->delete();
         return redirect()->route('subcategories.index')->with('success','Deleted !!');
        
    }
    
    
    public function destroy_subcat_image($id){
        Image::where('id',$id)->delete();
        return redirect()->route('subcategories.index')->with('success','Image Deleted Only !!');
    }
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Subcategory::where('id',$row)->delete();
        }
        return redirect()->route('subcategories.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
    public function setPopularAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'is_popular' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
    
    public function setFeatureAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'is_featured' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
    
    public function setHotAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'is_hot' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
    
    public function setBestAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'is_best' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
    
    public function setNewAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'is_new_arraival' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
    
    public function setOfferAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'is_special_offer' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
    
    public function setHomeAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subcategory::where('id',$row)->update([
                                    'set_as_home' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subcategories.index')->with('success','Updated !!');
    }
    
    
}
