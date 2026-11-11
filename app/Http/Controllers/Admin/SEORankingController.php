<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Seoranking;
use App\Model\Project;


class SEORankingController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seorankings = Seoranking::orderBy('id', 'desc')->get();
        return view('admin.seorankings',compact('seorankings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $projects =  Project::where('status','enable')->where('show_in','seoranking')->orderBy('id', 'desc')->get();
         return view('admin.seoranking_create',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                                  Seoranking::create([
                                   'project_id' => $request->project_id,
                                   'keyword' => $request->keyword,
                                   'page_result' => $request->page_result,
                                    'status' => $request->status,
                                ]);
                   //    print_r($request->all());            
        return redirect('admin/seorankings')->with('success','Added Successfully');
                                   
                             
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
        $projects =  Project::where('status','enable')->orderBy('id', 'desc')->get();
        $seoranking = Seoranking::where('id',$id)->get();
       
       // print_r($seoranking);
        return view('admin.seoranking_edit',compact('projects','seoranking'));
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
    
        
         Seoranking::where('id',$id)->update([
                                     'project_id' => $request->project_id,
                                   'keyword' => $request->keyword,
                                   'page_result' => $request->page_result,
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
          Seoranking::where('id',$id)->delete();
         return redirect()->route('seorankings.index')->with('success','Deleted !!');
        
    }
    
    
    
    
    
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
            Seoranking::where('id',$row)->delete();
        }
        return redirect()->route('seorankings.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Seoranking::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('seorankings.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Seoranking::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('seorankings.index')->with('success','Updated !!');
    }
    
}
