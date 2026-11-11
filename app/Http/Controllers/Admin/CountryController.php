<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Country;

class CountryController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('id', 'desc')->get();
        return view('admin.countries',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.country_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     

                                  Country::create([
                                    'name' => $request->name,
                                    'sortname' => $request->sortname,
                                    'phonecode' => $request->phonecode,
                                ]);
                                   
                 return redirect('admin/countries/')->with('Added Succefully');
                                   
                             
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*   $countries=User::where('user_type','user')->where('id',$id)->get();

        return view('admin/user_show',compact('countries'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$countries=About::where('id',$id)->get();

        return view('admin.about_edit',compact('countries'));*/
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
        
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
     Country::where('id',$id)->delete();
    return redirect()->route('countries.index')->with('success','Deleted !!');
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
    
    public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Country::where('id',$row)->delete();
        }
        return redirect()->route('countries.index')->with('success','Deleted !!');
    }
    
}
