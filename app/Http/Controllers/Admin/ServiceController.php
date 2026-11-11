<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service;
use App\Model\Image;
use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $services = Service::orderBy('id', 'desc')->get();
        return view('admin.services',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.service_create');
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
                            $destinationPath = public_path('/images/services/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                  Service::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'image' => $main_name,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                ]);
            
                 $last_product = Service::orderBy('id','desc')->first();
        
             
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/services/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'service',
                                           'product_id'=>$last_product['id'],
                                         ]);

                       }
                   }
            
        }elseif($request->hasFile('main_image') && !$request->hasFile('image')){
                       
            $main_photo = $request->file('main_image');
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/services/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                  Service::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'image' => $main_name,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                ]);
        
          
        }elseif(!$request->hasFile('main_image') && $request->hasFile('image')){
                    Service::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                ]);
            
                 $last_product = Service::orderBy('id','desc')->first();
        
             
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/services/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'service',
                                           'product_id'=>$last_product['id'],
                                         ]);


                       }
                   }
        }elseif(!$request->hasFile('main_image') && !$request->hasFile('image')){
                    Service::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                ]);
            
            
        }
        
         return redirect('admin/services/')->with('success','Added Successfully');
        
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
        $service = Service::where('id',$id)->first();

        return view('admin.service_edit',compact('service'));
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
      
        
       
        
        
        
         if($request->hasFile('main_image') && $request->hasFile('image'))
        {
                            $main_photo = $request->file('main_image'); 
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/services/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                  Service::where('id',$id)->update([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'image' => $main_name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                   
                                ]);
            
                 
       
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/services/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'service',
                                           'product_id'=>$id,
                                         ]);


                       }
                   }
            
        }elseif($request->hasFile('main_image') && !$request->hasFile('image')){
                       
            $main_photo = $request->file('main_image');
                            $main_name = time().'.'.$main_photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/services/');
                            $main_photo->move($destinationPath, $main_name);
            
            
                 Service::where('id',$id)->update([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'image' => $main_name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                   
                                ]);
        
          
        }elseif(!$request->hasFile('main_image') && $request->hasFile('image')){
                    Service::where('id',$id)->update([
                                    'name' => $request->name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                   
                                ]);
            
                   if ($request->hasFile('image')) {

                       foreach($request->image as $file)
                       {
                           $original_name = $file->getClientOriginalName();
                           $photo = $file;
                           $name = time().$original_name;
                           $destinationPath = public_path('/images/services/');
                           $photo->move($destinationPath, $name);
                           Image::create([ 
                                           'image'=>$name, 
                                           'name'=>'service',
                                           'product_id'=>$id,
                                         ]);


                       }
                   }
        }elseif(!$request->hasFile('main_image') && !$request->hasFile('image')){
                     Service::where('id',$id)->update([
                                    'name' => $request->name,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'is_popular' => $request->is_popular,
                                    'is_featured' => $request->is_featured,
                                    'is_hot' => $request->is_hot,
                                    'is_best' => $request->is_best,
                                    'is_new_arraival' => $request->is_new_arraival,
                                    'is_special_offer' => $request->is_special_offer,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                   
                                ]);
            
        }
        
               return back()->with('success','Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
           $row = Service::find($id);
     
        $image_path = public_path('images/services/'.$row->image);  
        //echo $image_path;
       @unlink($image_path);
         
        Service::where('id',$id)->delete();
         return redirect()->route('services.index')->with('success','Deleted !!');
        
    }
    
    
    
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Service::where('id',$row)->delete();
        }
        return redirect()->route('services.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    public function setPopularAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'is_popular' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    
    public function setFeatureAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'is_featured' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    
    public function setHotAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'is_hot' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    
    public function setBestAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'is_best' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    
    public function setNewAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'is_new_arraival' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    
    public function setOfferAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'is_special_offer' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    
    public function setHomeAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Service::where('id',$row)->update([
                                    'set_as_home' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('services.index')->with('success','Updated !!');
    }
    
    
    
    
    
}
