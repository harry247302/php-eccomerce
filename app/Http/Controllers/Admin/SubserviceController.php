<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service;
use App\Model\Subservice;
use File;

class SubserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subservices = Subservice::orderBy('id', 'desc')->get();
        return view('admin.subservices',compact('subservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.subservice_create');
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
       
           if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/services/');
                            $photo1->move($destinationPath, $name1);
                           
               }
          Subservice::create([
                                    'name' => $request->name,
                                    'service_id' => $request->service_id,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'image' => $name1,
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
                                   
                 return redirect('admin/subservices/')->with('success','Added Successfully');
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
        $subservices=Subservice::where('id',$id)->get();

        return view('admin.subservice_edit',compact('subservices'));
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
          if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/services/');
                            $photo1->move($destinationPath, $name1);
               Subservice::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
       
        
         Subservice::where('id',$id)->update([
                                    'name' => $request->name,
                                    'service_id' => $request->service_id,
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
        
           $row = Subservice::find($id);
     
        $image_path = public_path('images/services/'.$row->image);  
        //echo $image_path;
       @unlink($image_path);
        

      
        
        
       Subservice::where('id',$id)->delete();
         return redirect()->route('subservices.index')->with('success','Deleted !!');
        
    }
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Subservice::where('id',$row)->delete();
        }
        return redirect()->route('subservices.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
    public function setPopularAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'is_popular' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
    
    public function setFeatureAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'is_featured' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
    
    public function setHotAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'is_hot' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
    
    public function setBestAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'is_best' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
    
    public function setNewAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'is_new_arraival' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
    
    public function setOfferAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'is_special_offer' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
    
    
    public function setHomeAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Subservice::where('id',$row)->update([
                                    'set_as_home' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('subservices.index')->with('success','Updated !!');
    }
    
}
