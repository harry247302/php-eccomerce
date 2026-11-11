<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Why;

class WhyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whys = Why::orderBy('id', 'desc')->get();
        return view('admin.whys',compact('whys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.why_create');
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
                            $destinationPath = public_path('/images/whys/');
                            $photo1->move($destinationPath, $name1);
                           
                   Why::create([
                                    'title' => $request->title,
                                    'image' => $name1,
                                    'short_description' => $request->short_description,
                                    'order_by' => $request->order_by,
                                    'status' => $request->status,
                                ]);
               }else{
                   Why::create([
                                    'title' => $request->title,
                                    'short_description' => $request->short_description,
                                    'order_by' => $request->order_by,
                                    'status' => $request->status,
                                ]);
           }
        
           
                              
                                   
                 return redirect('admin/whys/')->with('success','Added Successfully');
                                   
                             
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
        $whys = Why::where('id',$id)->get();

        return view('admin.why_edit',compact('whys'));
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
                            $destinationPath = public_path('/images/whys/');
                            $photo1->move($destinationPath, $name1);
               Why::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          
        
         Why::where('id',$id)->update([
                                    'title' => $request->title,
                                    'short_description' => $request->short_description,
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
        $row = Why::find($id);
           $image_path = public_path('images/whys/'.$row->image);  
            //echo $image_path;
           @unlink($image_path);
          Why::where('id',$id)->delete();
         return redirect()->route('whys.index')->with('success',' Deleted !!');
    }
    
    
    
    
    
     public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Why::where('id',$row)->delete();
        }
        return redirect()->route('whys.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Why::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('whys.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Why::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('whys.index')->with('success','Updated !!');
    }
    
    
    
}
