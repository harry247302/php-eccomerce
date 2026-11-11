<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;


class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $logos = Logo::orderBy('id', 'desc')->get();
        return view('admin.logos',compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.logo_create');
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
                            $destinationPath = public_path('/images/logos/');
                            $photo->move($destinationPath, $name);
                           

                                  Logo::create([
                                    'name' => $request->name,
                                    'image' => $name,
                                      'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/logos/')->with('Added Succefully');
                                   
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
        $logos=Logo::where('id',$id)->get();

        return view('admin.logo_edit',compact('logos'));
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
         $logo=Logo::find($id);
        
        $logo->name=$request->name;
        $logo->status=$request->status;
      
       if ($request->hasFile('image')) {
          
                $photo = $request->file('image');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $destinationPath = public_path('/images/logos/');
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
        
           $row = Logo::find($id);
     
        $image_path = public_path('images/logos/'.$row->image);  
        //echo $image_path;
       @unlink($image_path);
        

      
    
        Logo::where('id',$id)->delete();
         return redirect()->route('logos.index')->with('success',' Deleted !!');
        
        
    }
    
    
     public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Logo::where('id',$row)->delete();
        }
        return redirect()->route('logos.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Logo::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('logos.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Logo::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('logos.index')->with('success','Updated !!');
    }
    
    
    
}
