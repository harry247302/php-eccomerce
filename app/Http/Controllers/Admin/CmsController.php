<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\Cmspage;


class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmspages = Cmspage::orderBy('id', 'desc')->get();
        return view('admin.cmspages',compact('cmspages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.cmspage_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $url =  str_replace(' ', '-',  $request->name);
       
           if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/cmspages/');
                            $photo1->move($destinationPath, $name1);
               Cmspage::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'image' => $name1,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'show_in' => $request->show_in,
                                    'page_type' => $request->page_type,
                                    'page_status' => $request->page_status,
                                ]);
                return redirect('admin/cmspages/')->with('success','Added Successfully');
                           
               }
        
             elseif($request->hasFile('header_image')) {
               
                            $photo2 = $request->file('header_image');
                            $name2 = time().'.'.$photo2->getClientOriginalExtension();
                            $destinationPath = public_path('/images/cmspages/');
                            $photo2->move($destinationPath, $name2);
               
               Cmspage::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'header_image' => $name2,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'show_in' => $request->show_in,
                                    'page_type' => $request->page_type,
                                    'page_status' => $request->page_status,
                                ]);
                  return redirect('admin/cmspages/')->with('success','Added Successfully');
                           
               }elseif($request->hasFile('header_image') && $request->hasFile('image')) {
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/cmspages/');
                            $photo1->move($destinationPath, $name1);
               
                            $photo2 = $request->file('header_image');
                            $name2 = time().'.'.$photo2->getClientOriginalExtension();
                            $destinationPath = public_path('/images/cmspages/');
                            $photo2->move($destinationPath, $name2);
               
                            Cmspage::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'header_image' => $name2,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'show_in' => $request->show_in,
                                    'page_type' => $request->page_type,
                                    'page_status' => $request->page_status,
                                ]);
                  return redirect('admin/cmspages/')->with('success','Added Successfully');
                           
               }else{
                                  Cmspage::create([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'show_in' => $request->show_in,
                                    'page_type' => $request->page_type,
                                    'page_status' => $request->page_status,
                                ]);
                                   
                 return redirect('admin/cmspages/')->with('success','Added Successfully');
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
        $cmspages=Cmspage::where('id',$id)->get();

        return view('admin.cmspage_edit',compact('cmspages'));
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
        $url =  str_replace(' ', '-',  $request->name);
          if ($request->hasFile('image')) {
               
                            $photo1 = $request->file('image');
                            $name1 = time().'.'.$photo1->getClientOriginalExtension();
                            $destinationPath = public_path('/images/cmspages/');
                            $photo1->move($destinationPath, $name1);
               Cmspage::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          if ($request->hasFile('header_image')) {
               
                            $photo2 = $request->file('header_image');
                            $name2 = time().'.'.$photo2->getClientOriginalExtension();
                            $destinationPath = public_path('/images/cmspages/');
                            $photo2->move($destinationPath, $name2);
                       
               Cmspage::where('id',$id)->update([
                                    'header_image' => $name2,
                                   
                                ]);
          }
        
         Cmspage::where('id',$id)->update([
                                    'name' => $request->name,
                                    'url' => $url,
                                    'meta_title' => $request->meta_title,
                                    'meta_description' => $request->meta_description,
                                    'meta_keywords' => $request->meta_keywords,
                                    'short_description' => $request->short_description,
                                    'long_description' => $request->long_description,
                                    'show_in' => $request->show_in,
                                    'page_type' => $request->page_type,
                                    'page_status' => $request->page_status,
                                   
                                ]);
        
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
          Cmspage::where('id',$id)->delete();
         return redirect()->route('cmspages.index')->with('success','Deleted !!');
        
    }
    
    
    
     public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
           Cmspage::where('id',$row)->delete();
        }
         return redirect()->route('cmspages.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          print_r($ids);
        foreach($ids as $row){
          Cmspage::where('id',$row)->update([
                                    'page_status' => 'disable',
                                   
                                ]);
        }
         return redirect()->route('cmspages.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          print_r($ids);
        foreach($ids as $row){
          Cmspage::where('id',$row)->update([
                                    'page_status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('cmspages.index')->with('success','Updated !!');
    }
}
