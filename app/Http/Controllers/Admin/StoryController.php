<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Story;

class StoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::orderBy('id', 'desc')->get();
        return view('admin.stories',compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.story_create');
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
       
           if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getStoryOriginalExtension();
                            $destinationPath = public_path('/images/stories/');
                            $photo1->move($destinationPath, $name1);
                        Story::create([
                                    'title' => $request->title,
                                    'url' => $url,
                                    'image' => $name1,
                                    'content' => $request->content,
                                    'status' => $request->status,
                                ]);    
               }else{
                Story::create([
                                    'title' => $request->title,
                                    'url' => $url,
                                    'content' => $request->content,
                                    'status' => $request->status,
                                ]);
           }
        
           
                                 
                                   
                 return redirect('admin/stories/')->with('success','Added Successfully');
                                   
                             
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
        $stories = Story::where('id',$id)->get();

        return view('admin.story_edit',compact('stories'));
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
                            $name1 = time().'.'.$photo1->getStoryOriginalExtension();
                            $destinationPath = public_path('/images/stories/');
                            $photo1->move($destinationPath, $name1);
               Story::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          
        
         Story::where('id',$id)->update([
                                    'title' => $request->title,
                                    'url' => $url,
                                    'content' => $request->content,
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
        $row = Story::find($id);
           $image_path = public_path('images/stories/'.$row->image);  
            //echo $image_path;
           @unlink($image_path);
          Story::where('id',$id)->delete();
         return redirect()->route('stories.index')->with('success',' Deleted !!');
    }
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Story::where('id',$row)->delete();
        }
        return redirect()->route('stories.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Story::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('stories.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Story::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('stories.index')->with('success','Updated !!');
    }
}
