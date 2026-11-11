<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ProjectCategory;
use File;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $projcategories = ProjectCategory::orderBy('id', 'desc')->get();
        return view('admin.projectcategories',compact('projcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.projectcategory_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       
          
          ProjectCategory::create([
                                    'name' => $request->name,
                                    'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/ProjectCategories/')->with('success','Added Successfully');
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
        $ProjectCategories=ProjectCategory::where('id',$id)->get();

        return view('admin.projectcategory_edit',compact('ProjectCategories'));
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
       
        
       
        
         ProjectCategory::where('id',$id)->update([
                                    'name' => $request->name,
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
        /*
           $row = ProjectCategory::find($id);
     
        $image_path = public_path('images/services/'.$row->image);  
        //echo $image_path;
       @unlink($image_path);
        */

      
        
        
       ProjectCategory::where('id',$id)->delete();
         return redirect()->route('ProjectCategories.index')->with('success','Deleted !!');
        
    }
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             ProjectCategory::where('id',$row)->delete();
        }
        return redirect()->route('ProjectCategories.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          ProjectCategory::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('ProjectCategories.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          ProjectCategory::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('ProjectCategories.index')->with('success','Updated !!');
    }
    
    
    
    
}
