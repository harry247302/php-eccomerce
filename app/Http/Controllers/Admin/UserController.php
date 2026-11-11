<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('user_type', 'user')->orderBy('id', 'desc')->get();
        return view('admin.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['email' => 'required|string|email|max:255|unique:users' ]);
        
      
        
      
                                User::create([
                                    'first_name' => $request->first_name,
                                    'last_name' => $request->last_name,
                                    'gender' => $request->gender,
                                    'phonecode' => $request->phonecode,
                                    'mobile' => $request->mobile,
                                    'email' => $request->email,
                                    'user_type' => 'user',
                                    'is_admin' => 0,
                                    'password' => Hash::make($request->password),
                                    
                                ]);
                                   
                 return redirect('admin/users')->with('Added Succefully');
                           
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*   $users=User::where('user_type','user')->where('id',$id)->get();

        return view('admin/user_show',compact('users'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::where('user_type','user')->where('id',$id)->get();

        return view('admin.user_edit',compact('users'));
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
        
         $users=User::find($id);
      
        
       
      
        $users->first_name=$request->first_name;
        $users->last_name=$request->last_name;
        $users->gender=$request->gender;
        $users->phonecode=$request->phonecode;
        $users->mobile=$request->mobile;
        $users->email=$request->email;
        $users->password=Hash::make($request->password);
       
        
       

             
        $users->save();


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
       $user = User::find($id);
     $image_path1 = public_path().'/images/profiles/'.$user->photo1;
     $image_path2 = public_path().'/images/profiles/'.$user->photo2;
     $image_path3 = public_path().'/images/profiles/'.$user->photo3;
            
            
       Storage::delete('public/images/profiles/'.$user->photo1);
       Storage::delete('public/images/profiles/'.$user->photo2);
       Storage::delete('public/images/profiles/'.$user->photo3);
        
        $user->delete();
     User::where('id',$id)->delete();
    return redirect()->route('users.index')->with('success','User Deleted !!');
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
         return redirect()->route('users.index')->with('success','Admin Deleted !!');
    }
}