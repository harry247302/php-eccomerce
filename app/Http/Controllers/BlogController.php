<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\Company;
use App\Model\Service;
use App\Model\Blog;
use App\Model\Comment;
use App\Model\Cmspage;
use App\Model\Officedismantling;

class BlogController extends Controller
{
    
     public function index(){
         
      $blogs =  Blog::where('status','enable')->get();
      $services =  Service::where('status','enable')->get();
      $company =  Company::where('status','enable')->first();
         
        return view('blog_all',compact('blogs','services','company'));
     }
    
    public function view($url){
        
        $blog =  Blog::where('url',$url)->where('status','enable')->first();
        $company =  Company::where('status','enable')->first();
        $services =  Service::where('status','enable')->get();
        $comments = Comment::where('status','enable')->where('comment_on','blog')->where('comment_on_id',$blog->id)->get();
        $pages_prod = Cmspage::Where('url', 'like', '%' . 'product' . '%')->where('page_status','enable')->first();
        return view('blog_view',compact('blog','services','company','comments','pages_prod'));
  
    }
    
    
    public function submit_comment(Request $request){
    
       $comment_create = Comment::create([
             'user_name' => $request->user_name,
             'comment' => $request->comment,
             'comment_on' => 'blog',
             'comment_on_id' => $request->blog_id,
             'status' => 'enable'
         ]);
        
        if(isset($comment_create)){
            echo "done";
        }else{
            echo "not";
        }       
    }
    
    
    
    public function office_dismantling(){
        
        $dismantling =  Officedismantling::first();
      
        return view('office_dismantling',compact('dismantling'));
    }
}
