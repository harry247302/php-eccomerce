<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Package;

class PackageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::orderBy('id', 'desc')->get();
        return view('admin.packages',compact('packages'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.package_create');
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
                            $destinationPath = public_path('/images/packages/');
                            $photo1->move($destinationPath, $name1);
                           
               
                     Package::create([
                                    'name' => $request->name,
                                    'price' => $request->price,
                                    'duration' => $request->duration,
                                    'description' => $request->content,
                                    'image' => $name1,
                                    'status' => $request->status,
                                ]);
               }else{
               
                     Package::create([
                                     'name' => $request->name,
                                    'price' => $request->price,
                                    'duration' => $request->duration,
                                    'description' => $request->content,
                                   'status' => $request->status,
                                ]);
           }
        
           
                                  
                                   
                 return redirect('admin/packages/')->with('success','Added Successfully');
                                   
                             
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
        $packages = Package::where('id',$id)->get();

        return view('admin.package_edit',compact('packages'));
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
                            $destinationPath = public_path('/images/packages/');
                            $photo1->move($destinationPath, $name1);
               Package::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          
        
         Package::where('id',$id)->update([
                                    'name' => $request->name,
                                    'price' => $request->price,
                                    'duration' => $request->duration,
                                    'description' => $request->content,
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
        $row = Package::find($id);
           $image_path = public_path('images/packages/'.$row->image);  
            //echo $image_path;
           @unlink($image_path);
          Package::where('id',$id)->delete();
         return redirect()->route('packages.index')->with('success',' Deleted !!');
    }
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Package::where('id',$row)->delete();
        }
        return redirect()->route('packages.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Package::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('packages.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Package::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('packages.index')->with('success','Updated !!');
    }
    
}
