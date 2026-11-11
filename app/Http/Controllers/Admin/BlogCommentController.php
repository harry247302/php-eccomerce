<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Comment;
use App\Model\Blog;


class BlogCommentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('comment_on','blog')->orderBy('id', 'desc')->get();
        return view('admin.blog_comments',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $blogs =  Blog::orderBy('id', 'desc')->get();
         return view('admin.blog_comment_create',compact('blogs'));
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
                                    'comment_on' => 'blog',
                                    'stars' => $request->stars,
                                    'status' => $request->status,
                                ]);
                                   
                 return redirect('admin/blog-comments/')->with('success','Added Successfully');
                                   
                             
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
        $blogs =  Blog::orderBy('id', 'desc')->get();
        return view('admin.blog_comment_edit',compact('comments','blogs'));
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
                                    'comment_on' => 'blog',
                                    'stars' => $request->stars,
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
          Comment::where('id',$id)->delete();
         return redirect()->route('blog-comments.index')->with('success','Deleted !!');
        
    }
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Comment::where('id',$row)->delete();
        }
        return redirect()->route('blog-comments.index')->with('success','Deleted !!');
    }
    
    
    
     public function disableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Comment::where('id',$row)->update([
                                    'status' => 'disable',
                                   
                                ]);
        }
           return redirect()->route('blog-comments.index')->with('success','Updated !!');
    }
    
    
     public function enableAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
          Comment::where('id',$row)->update([
                                    'status' => 'enable',
                                   
                                ]);
        }
         return redirect()->route('blog-comments.index')->with('success','Updated !!');
    }
    
}