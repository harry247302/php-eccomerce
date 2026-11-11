<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Icon;


class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $icons = Icon::orderBy('id', 'desc')->get();
        return view('admin.icons',compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.icon_create');
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
               
                            $photo = $request->file('image');
                            $name = time().'.'.$photo->getClientOriginalExtension();
                            $destinationPath = public_path('/images/icons/');
                            $photo->move($destinationPath, $name);
                           

                                  Icon::create([
                                    'name' => $request->name,
                                    'image' => $name,
                                      'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/icons/')->with('Added Succefully');
                                   
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
        $icons=Icon::where('id',$id)->get();

        return view('admin.icon_edit',compact('icons'));
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
         $logo=Icon::find($id);
        
        $logo->name=$request->name;
        $logo->status=$request->status;
      
       if ($request->hasFile('image')) {
          
                $photo = $request->file('image');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/');
                $photo->move($destinationPath, $name);
                    
              $logo->image=$name;
           
       }
        
        
        $logo->save();


        return back()->with('success',' Updated Succefully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
           $row = Icon::find($id);
     
        $image_path = public_path('images/icons/'.$row->image);  
        //echo $image_path;
       @unlink($image_path);
        

      
    
        Icon::where('id',$id)->delete();
         return redirect()->route('icons.index')->with('success',' Deleted !!');
        
        
    }
    
    
     public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Icon::where('id',$row)->delete();
        }
        return redirect()->route('icons.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Icon::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('icons.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Icon::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('icons.index')->with('success','Updated !!');
    }
    
    
    
}
