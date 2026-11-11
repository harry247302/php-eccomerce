<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Project;

class ProjectController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('admin.projects',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.project_create');
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
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/projects/');
                            $photo1->move($destinationPath, $name1);
                           
               }
        
           
                                  Project::create([
                                    'title' => $request->title,
                                    'project_url' => $request->project_url,
                                    'category_id' => $request->category_id,
                                    'url' => $url,
                                    'image' => $name1,
                                    'content' => $request->content,
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
                                    'order_by' => $request->order_by,
                                    'show_in' => $request->show_in,
                                    'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/all_projects/')->with('success','Added Successfully');
                                   
                             
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
        $projects = Project::where('id',$id)->get();

        return view('admin.project_edit',compact('projects'));
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
                            $destinationPath = public_path('/images/projects/');
                            $photo1->move($destinationPath, $name1);
               Project::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          
        
         Project::where('id',$id)->update([
                                    'title' => $request->title,
                                    'project_url' => $request->project_url,
                                    'category_id' => $request->category_id,
                                    'url' => $url,
                                    'content' => $request->content,
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
                                    'order_by' => $request->order_by,
                                    'show_in' => $request->show_in,
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
        $row = Project::find($id);
           $image_path = public_path('images/projects/'.$row->image);  
            //echo $image_path;
           @unlink($image_path);
          Project::where('id',$id)->delete();
         return redirect()->route('all_projects.index')->with('success',' Deleted !!');
    }
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Project::where('id',$row)->delete();
        }
        return redirect()->route('all_projects.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
    public function setPopularAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'is_popular' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
    
    public function setFeatureAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'is_featured' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
    
    public function setHotAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'is_hot' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
    
    public function setBestAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'is_best' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
    
    public function setNewAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'is_new_arraival' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
    
    public function setOfferAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'is_special_offer' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
    
    
    public function setHomeAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Project::where('id',$row)->update([
                                    'set_as_home' => 'yes',
                                   
                                ]);
        }
         return redirect()->route('all_projects.index')->with('success','Updated !!');
    }
    
}
