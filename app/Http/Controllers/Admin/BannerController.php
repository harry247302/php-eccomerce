<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\Banner;

class BannerController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->get();
        return view('admin.banners',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.banner_create');
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
                            $destinationPath = public_path('/images/banners/');
                            $photo->move($destinationPath, $name);
                           

                                  Banner::create([
                                    'name' => $request->name,
                                    'description' => $request->description,
                                    'image' => $name,
                                      'order_by' => $request->order_by,
                                      'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/banners/')->with('Added Succefully');
                                   
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
      /*   $banners=User::where('user_type','user')->where('id',$id)->get();

        return view('admin/user_show',compact('banners'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banners=Banner::where('id',$id)->get();

        return view('admin.banner_edit',compact('banners'));
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
        
         $banners=Banner::find($id);
        
        $banners->name=$request->name;
        $banners->description=$request->description;
        $banners->order_by=$request->order_by;
        $banners->status=$request->status;
      
       if ($request->hasFile('image')) {
          
                $photo = $request->file('image');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $destinationPath = public_path('/images/banners/');
                $photo->move($destinationPath, $name);
                    
              $banners->image=$name;
           
       }
        
        
        $banners->save();


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
        
        
        
           $row = Banner::find($id);
     
        $image_path = public_path('images/banners/'.$row->image);  
        //echo $image_path;
       @unlink($image_path);
        

      
    
        Banner::where('id',$id)->delete();
         return redirect()->route('banners.index')->with('success',' Deleted !!');
        
        
   
    }
    
    
     /* Search result show
     */
    public function search(Request $request)
    {
       $search = $request->search;
       $data = User::where('user_type','user')
           ->where('name','like', '%' . $search . '%')
           ->orwhere('email','like', '%' . $search . '%')
           ->orwhere('mobile','like', '%' . $search . '%')->get();
        return view('admin.search_result',compact('data'));
    }
    
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Banner::where('id',$row)->delete();
        }
        return redirect()->route('banners.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Banner::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('banners.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Banner::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('banners.index')->with('success','Updated !!');
    }
}
