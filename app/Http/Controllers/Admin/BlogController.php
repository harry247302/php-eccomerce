<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.blog_create');
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
                            $destinationPath = public_path('/images/blogs/');
                            $photo1->move($destinationPath, $name1);
                            
                            
                             Blog::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'image' => $name1,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'order_by' => $request->order_by,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/blogs/')->with('success','Added Successfully');
                           
               }else{
                Blog::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'order_by' => $request->order_by,
                                    'set_as_home' => $request->set_as_home,
                                    'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/blogs/')->with('success','Added Successfully');
               }
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
        $blogs=Blog::where('id',$id)->get();

        return view('admin.blog_edit',compact('blogs'));
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
                            $destinationPath = public_path('/images/blogs/');
                            $photo1->move($destinationPath, $name1);
               Blog::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
       
        
         Blog::where('id',$id)->update([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'order_by' => $request->order_by,
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
        
           $row = Blog::find($id);
     
        $image_path = public_path('images/blogs/'.$row->image);  
        //echo $image_path;
       @unlink($image_path);
        

      
        
        
        Blog::where('id',$id)->delete();
         return redirect()->route('blogs.index')->with('success','Deleted !!');
        
    }
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Blog::where('id',$row)->delete();
        }
        return redirect()->route('blogs.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Blog::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('blogs.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Blog::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('blogs.index')->with('success','Updated !!');
    }
    
    
    
     public function setHomeAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Blog::where('id',$row)->update([
                                    'set_as_home' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('blogs.index')->with('success','Updated !!');
    }
}
