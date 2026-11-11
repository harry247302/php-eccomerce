<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\Banner;
use App\Model\Officedismantling;

class DismaltingController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofd = Officedismantling::first();
        return view('admin.officedismalting',compact('ofd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ofd = Officedismantling::where('id',$id)->first();
        return view('admin.officedismalting_edit',compact('ofd'));
    }

    

   
   
    public function update(Request $request, $id)
    {
        
         $ofd=Officedismantling::find($id);
        
        $ofd->title=$request->title;
        $ofd->description=$request->long_description;
      
       if ($request->hasFile('image')) { 
                $photo = $request->file('image');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $destinationPath = public_path('/images/officedismantling/');
                $photo->move($destinationPath, $name);
                    
              $ofd->image=$name;
       }
        
        $ofd->meta_title=$request->meta_title;
        $ofd->meta_description=$request->meta_description;
        $ofd->meta_keywords=$request->meta_keywords;
        $ofd->save();


        return redirect('admin/office_dismantling')->with('success',' Updated Succefully !!');
    }

    
}
