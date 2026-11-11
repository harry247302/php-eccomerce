<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Story;
use App\Model\Cmspage;
use App\Model\Company;
use App\Model\Project;

class ProjectController extends Controller
{
   public function index($url){
       $pages_project = Cmspage::Where('url', 'like', '%' . 'project' . '%')->where('page_status','enable')->first();
       
       $projects =  Project::where('status','enable')->where('show_in','portfollio')->paginate(6);
       $project =  Project::where('status','enable')->where('url',$url)->first();
      // $company = Company::where('status','enable')->first(); 
     //  print_r($service);
        return view('project_view',compact('projects','project','pages_project'));
     }
}
