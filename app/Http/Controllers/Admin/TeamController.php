<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Team;

class TeamController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('admin.teams',compact('teams'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.team_create');
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
                            $destinationPath = public_path('/images/teams/');
                            $photo1->move($destinationPath, $name1);
                           
               
                     Team::create([
                                    'name' => $request->name,
                                    'image' => $name1,
                                    'designation' => $request->designation,
                                    'facebook_link' => $request->facebook_link,
                                    'twitter_link' => $request->twitter_link,
                                    'insta_link' => $request->insta_link,
                                    'linkedin_link' => $request->linkedin_link,
                                    'status' => $request->status,
                                    'order_by' => $request->order_by,
                                ]);
               }else{
               
                     Team::create([
                                    'name' => $request->name,
                                    'designation' => $request->designation,
                                    'facebook_link' => $request->facebook_link,
                                    'twitter_link' => $request->twitter_link,
                                    'insta_link' => $request->insta_link,
                                    'linkedin_link' => $request->linkedin_link,
                                    'status' => $request->status,
                                    'order_by' => $request->order_by,
                                  
                                ]);
           }
        
           
                                  
                                   
                 return redirect('admin/teams/')->with('success','Added Successfully');
                                   
                           
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
        $teams = Team::where('id',$id)->get();

        return view('admin.team_edit',compact('teams'));
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
                            $destinationPath = public_path('/images/teams/');
                            $photo1->move($destinationPath, $name1);
               Team::where('id',$id)->update([
                                            'image' => $name1,
                                            ]);
              
          }
        
          
        
         Team::where('id',$id)->update([
                                     'name' => $request->name,
                                    'designation' => $request->designation,
                                    'facebook_link' => $request->facebook_link,
                                    'twitter_link' => $request->twitter_link,
                                    'insta_link' => $request->insta_link,
                                    'linkedin_link' => $request->linkedin_link,
                                    'status' => $request->status,
                                    'order_by' => $request->order_by,
                                   
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
        $row = Team::find($id);
           $image_path = public_path('images/teams/'.$row->image);  
            //echo $image_path;
           @unlink($image_path);
          Team::where('id',$id)->delete();
         return redirect()->route('teams.index')->with('success',' Deleted !!');
    }
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Team::where('id',$row)->delete();
        }
        return redirect()->route('teams.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Team::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('teams.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Team::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('teams.index')->with('success','Updated !!');
    }
    
}
