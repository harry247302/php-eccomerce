<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Comment;
use App\Model\Service;


class ServiceCommentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('comment_on','service')->orderBy('id', 'desc')->get();
        return view('admin.service_comments',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $services =  Service::orderBy('id', 'desc')->get();
         return view('admin.service_comment_create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                                  Comment::create([
                                    'comment_on_id' => $request->comment_on_id,
                                    'user_name' => $request->user_name,
                                    'comment' => $request->comment,
                                    'comment_on' => 'service',
                                    'stars' => $request->stars,
                                    'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/service-comments/')->with('success','Added Successfully');
                                   
                             
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
        $comments=Comment::where('id',$id)->get();
        $services =  Service::orderBy('id', 'desc')->get();
        return view('admin.service_comment_edit',compact('comments','services'));
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
    
        
         Comment::where('id',$id)->update([
                                    'comment_on_id' => $request->comment_on_id,
                                    'user_name' => $request->user_name,
                                    'comment' => $request->comment,
                                    'comment_on' => 'service',
                                    'stars' => $request->stars,
                                    'status' => $request->status,
                                   
                                ]);
        
            return redirect('admin/service-comments/')->with('success','Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Comment::where('id',$id)->delete();
         return redirect()->route('service-comments.index')->with('success','Deleted !!');
        
    }
}