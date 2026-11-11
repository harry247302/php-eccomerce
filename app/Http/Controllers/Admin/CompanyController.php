<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $companies = Company::orderBy('id', 'desc')->get();
        return view('admin.companies',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.company_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          Company::create([
                                    'name' => $request->name,
                                    'owner_name' => $request->owner_name,
                                    'email' => $request->email,
                                    'enquiry_email' => $request->enquiry_email,
                                    'mobile' => $request->mobile,
                                    'landline' => $request->landline,
                                    'fax' => $request->fax,
                                    'whatsapp_number' => $request->whatsapp_number,
                                    'call_number' => $request->call_number,
                                    'office_address' => $request->office_address,
                                    'contact_address' => $request->contact_address,
                                    'contact_state' => $request->contact_state,
                                    'contact_city' => $request->contact_city,
                                    'contact_pincode' => $request->contact_pincode,
                                    'contact_country' => $request->contact_country,
                                    'contact_website' => $request->contact_website,
                                    'catelog_url' => $request->catelog_url,
                                    'copyright' => $request->copyright,
                                    'design_and_develope' => $request->design_and_develope,
                                    'design_and_develope_url' => $request->design_and_develope_url,
                                    'skype_link' => $request->skype_link,
                                    'facebook_link' => $request->facebook_link,
                                    'youtube_link' => $request->youtube_link,
                                    'insta_link' => $request->insta_link,
                                    'twitter_link' => $request->twitter_link,
                                    'linkdin_link' => $request->linkdin_link,
                                    'google_map' => $request->google_map,
                                    'status' => $request->status,
                                   
                                ]);
                                   
                 return redirect('admin/companies/')->with('Added Succefully');
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
        $companies = Company::where('id',$id)->get();

        return view('admin.company_edit',compact('companies'));
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
        $company= Company::where('id',$id)->update([
                                    'name' => $request->name,
                                    'owner_name' => $request->owner_name,
                                    'email' => $request->email,
                                    'enquiry_email' => $request->enquiry_email,
                                    'mobile' => $request->mobile,
                                    'landline' => $request->landline,
                                    'fax' => $request->fax,
                                    'whatsapp_number' => $request->whatsapp_number,
                                    'call_number' => $request->call_number,
                                    'office_address' => $request->office_address,
                                    'contact_address' => $request->contact_address,
                                    'contact_state' => $request->contact_state,
                                    'contact_city' => $request->contact_city,
                                    'contact_pincode' => $request->contact_pincode,
                                    'contact_country' => $request->contact_country,
                                    'contact_website' => $request->contact_website,
                                    'catelog_url' => $request->catelog_url,
                                    'copyright' => $request->copyright,
                                    'design_and_develope' => $request->design_and_develope,
                                    'design_and_develope_url' => $request->design_and_develope_url,
                                    'skype_link' => $request->skype_link,
                                    'facebook_link' => $request->facebook_link,
                                    'youtube_link' => $request->youtube_link,
                                    'insta_link' => $request->insta_link,
                                    'twitter_link' => $request->twitter_link,
                                    'linkdin_link' => $request->linkdin_link,
                                    'google_map' => $request->google_map,
                                    'status' => $request->status,
                                   
                                ]);

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
      
        Company::where('id',$id)->delete();
         return redirect()->route('companies.index')->with('success','Deleted !!');
    }
    
    
    
    public function deleteall(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
           Company::where('id',$row)->delete();
        }
         return redirect()->route('companies.index')->with('success','Deleted !!');
    }
}
