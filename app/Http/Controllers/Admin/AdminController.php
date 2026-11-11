<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('user_type', 'admin')->orderBy('id', 'desc')->get();
        return view('admin.admins',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.admin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     

                                User::create([
                                    'first_name' => $request->first_name,
                                    'last_name' => $request->last_name,
                                    'gender' => $request->gender,
                                    'phonecode' => $request->phonecode,
                                    'mobile' => $request->mobile,
                                    'email' => $request->email,
                                    'user_type' => 'admin',
                                    'is_admin' => 1,
                                    'password' => Hash::make($request->password),
                                    
                                ]);
                                   
                 return redirect('admin/admins')->with('Added Succefully');
                           
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*   $admins=User::where('user_type','user')->where('id',$id)->get();

        return view('admin/user_show',compact('admins'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins=User::where('user_type','admin')->where('id',$id)->get();

        return view('admin.admin_edit',compact('admins'));
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
        
         $admins=User::find($id);
        
        $admins->first_name=$request->first_name;
        $admins->last_name=$request->last_name;
        $admins->gender=$request->gender;
        $admins->phonecode=$request->phonecode;
        $admins->mobile=$request->mobile;
        $admins->email=$request->email;
        $admins->password=Hash::make($request->password);
       
             
        $admins->save();


        return back()->with('success',' Updated Succefully !!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
     User::where('id',$id)->delete();
    return redirect()->route('admins.index')->with('success','User Deleted !!');
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
    
    
     public function deleteall(Request $request)
    {
      $ids = $request->ids;
          print_r($ids);
        foreach($ids as $row){
           User::where('id',$row)->delete();
        }
         return redirect()->route('admins.index')->with('success','Admin Deleted !!');
    }
}
