<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\How;

class HowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hows = How::orderBy('id', 'desc')->get();
        return view('admin.hows',compact('hows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.how_create');
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
                            $destinationPath = public_path('/images/hows/');
                            $photo1->move($destinationPath, $name1);
                           
                   How::create([
                                    'title' => $request->title,
                                    'image' => $name1,
                                    'short_description' => $request->short_description,
                                    'order_by' => $request->order_by,
                                    'status' => $request->status,
                                ]);
               }else{
                   How::create([
                                    'title' => $request->title,
                                    'short_description' => $request->short_description,
                                    'order_by' => $request->order_by,
                                    'status' => $request->status,
                                ]);
           }
        
           
                              
                                   
                 return redirect('admin/hows/')->with('success','Added Successfully');
                                   
                             
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
        $hows = How::where('id',$id)->get();

        return view('admin.how_edit',compact('hows'));
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
                            $destinationPath = public_path('/images/hows/');
                            $photo1->move($destinationPath, $name1);
               How::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          
        
         How::where('id',$id)->update([
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
        $row = How::find($id);
           $image_path = public_path('images/hows/'.$row->image);  
            //echo $image_path;
           @unlink($image_path);
          How::where('id',$id)->delete();
         return redirect()->route('hows.index')->with('success',' Deleted !!');
    }
    
    
    
    
    
     public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             How::where('id',$row)->delete();
        }
        return redirect()->route('hows.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          How::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('hows.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          How::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('hows.index')->with('success','Updated !!');
    }
    
    
    
}
