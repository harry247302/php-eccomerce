<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Testimonial;

class TestimonialController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        return view('admin.testimonials',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.testimonial_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $url =  str_replace(' ', '-',  $request->title);
        
                    Testimonial::create([
                                    'title' => $request->title,
                                    'url' => $url,
                                    'content' => $request->content,
                                    'work_profile' => $request->work_profile,
                                    'order_by' => $request->order_by,
                                    'status' => $request->status,
                                ]);
        
            $last_id = Testimonial::orderBy('id','desc')->first();
        
        
           if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/testimonials/');
                            $photo1->move($destinationPath, $name1);
                              
                            Testimonial::where('id',$last_id->id)->update([
                                            'image' => $name1,
                                            ]);
                 }
        
          if ($request->hasFile('thumbnail')) {
               
                            $photo2 = $request->file('thumbnail');
                            $name2 = time().'.'.$photo2->getClientOriginalExtension();
                            $destinationPath = public_path('/images/testimonials/thumb/');
                            $photo2->move($destinationPath, $name2);
                              
                            Testimonial::where('id',$last_id->id)->update([
                                            'thumbnail' => $name2,
                                            ]);
                 }
        
           
        
        
        if ($request->hasFile('video')) {
               
                            $video = $request->file('video');
                            $name_video = time().'.'.$video->getClientOriginalExtension();
                            $destinationPath = public_path('/videos/testimonials/');
                            $video->move($destinationPath, $name_video);
                              
                            Testimonial::where('id',$last_id->id)->update([
                                            'video' => $name_video,
                                            ]);
                 }
        
                                 
                                   
           return redirect('admin/testimonials/')->with('success','Added Successfully');
                                   
                             
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
        $testimonials = Testimonial::where('id',$id)->get();

        return view('admin.testimonial_edit',compact('testimonials'));
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
        $url =  str_replace(' ', '-',  $request->title);
          if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/testimonials/');
                            $photo1->move($destinationPath, $name1);
               Testimonial::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
        
            if ($request->hasFile('thumbnail')) {
               
                            $photo2 = $request->file('thumbnail');
                            $name2 = time().'.'.$photo2->getClientOriginalExtension();
                            $destinationPath = public_path('/images/testimonials/thumb/');
                            $photo2->move($destinationPath, $name2);
                              
                            Testimonial::where('id',$id)->update([
                                            'thumbnail' => $name2,
                                            ]); 
                 }
        
           
        
        
        if ($request->hasFile('video')) {
               
                            $video = $request->file('video');
                            $name_video = time().'.'.$video->getClientOriginalExtension();
                            $destinationPath = public_path('/videos/testimonials/');
                            $video->move($destinationPath, $name_video);
                              
                            Testimonial::where('id',$id)->update([
                                            'video' => $name_video,
                                            ]);
                 }
        
                                 
          
        
         Testimonial::where('id',$id)->update([
                                    'title' => $request->title,
                                    'url' => $url,
                                    'content' => $request->content,
                                    'work_profile' => $request->work_profile,
                                    'order_by' => $request->order_by,
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
        $row = Testimonial::find($id);
           $image_path = public_path('images/testimonials/'.$row->image);  
            //echo $image_path;
           @unlink($image_path);
          Testimonial::where('id',$id)->delete();
         return redirect()->route('testimonials.index')->with('success',' Deleted !!');
    }
    
    
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Testimonial::where('id',$row)->delete();
        }
        return redirect()->route('testimonials.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Testimonial::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('testimonials.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Testimonial::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('testimonials.index')->with('success','Updated !!');
    }
    
}
