<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $images = Image::orderBy('id', 'desc')->get();
        return view('admin.galleries',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/galleries/');
                            $photo1->move($destinationPath, $name1);
                           
               }
        
          
                                  Image::create([
                                    'name' => $request->name,
                                    'category' => $request->category,
                                    'alternative_text' => $request->alternative_text,
                                    'status' => $request->status,
                                    'set_as_home' => $request->set_as_home,
                                    'image' => $name1,
                                    
                                   
                                ]);
                                   
                 return redirect('admin/galleries/')->with('success','Added Successfully');
                                   
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
        $image=Image::where('id',$id)->get();

        return view('admin.gallery_edit',compact('image'));
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
         if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/galleries/');
                            $photo1->move($destinationPath, $name1);
               Image::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          Image::where('id',$id)->update([
                                    'name' => $request->name,
                                    'category' => $request->category,
                                    'alternative_text' => $request->alternative_text,
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
         
        $row = Image::find($id);
        $image_path = public_path('images/galleries/'.$row->image);  
        //echo $image_path;
        @unlink($image_path);
        

      
    
        Image::where('id',$id)->delete();
         return redirect()->route('galleries.index')->with('success',' Deleted !!');
    }
     
    
     public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Image::where('id',$row)->delete();
        }
        return redirect()->route('galleries.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Image::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('galleries.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Image::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('galleries.index')->with('success','Updated !!');
    }
}
