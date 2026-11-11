<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\Measure;
use App\Model\Banner;

class MeasureController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measurement = Measure::orderBy('id', 'desc')->get();
        return view('admin.measurements',compact('measurement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.measurment_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $order_number = 'YOUME-'.time();
        $status = "new";
        
                      Measure::create([
                          'order_number' => $order_number,
                          'status' => $status,
                          'user_name' => $request->user_name,
                          'user_number' => $request->user_number,
                          'user_address' => $request->user_address,
                          'type_of_dress' => $request->type_of_dress,
                          'shirt_dot_length' => $request->shirt_dot_length,
                          'shirt_waist_line' => $request->shirt_waist_line,
                          'shirt_length' => $request->shirt_length,
                          'shirt_breast' => $request->shirt_breast,
                          'shirt_upper_chest' => $request->shirt_upper_chest,
                          'shirt_waist' => $request->shirt_waist,
                          'shirt_stomach' => $request->shirt_stomach,
                          'shirt_hip' => $request->shirt_hip,
                          'shirt_sholuder' => $request->shirt_sholuder,
                          'shirt_sleeves' => $request->shirt_sleeves,
                          'shirt_sleeves_bottom' => $request->shirt_sleeves_bottom,
                          'shirt_neck_front' => $request->shirt_neck_front,
                          'shirt_neck_back' => $request->shirt_neck_back,
                          'shirt_arm_hole' => $request->shirt_arm_hole,
                          'shirt_slits' => $request->shirt_slits,
                          'shirt_ghera' => $request->shirt_ghera,
                          
                          'pant_thighs' => $request->pant_thighs,
                          'pant_knee' => $request->pant_knee,
                          'pant_bottom' => $request->pant_bottom,
                          'pant_length' => $request->pant_length,
                          'pant_inseam_length' => $request->pant_inseam_length,
                          'pant_waist' => $request->pant_waist,
                          'pant_croach' => $request->pant_croach,
                          
                          'salwar_length' => $request->salwar_length,
                          'salwar_bottom' => $request->salwar_bottom,
                          'salwar_waist' => $request->salwar_waist,
                          
                          'chooridaar_length' => $request->chooridaar_length,
                          'chooridaar_thigh' => $request->chooridaar_thigh,
                          'chooridaar_knee' => $request->chooridaar_knee,
                          'chooridaar_calf' => $request->chooridaar_calf,
                          'chooridaar_calf' => $request->chooridaar_calf,
                          'chooridaar_bottom' => $request->chooridaar_bottom,
                          'chooridaar_waist' => $request->chooridaar_waist,
                          
                          'lhenga_length' => $request->lhenga_length,
                          'lhenga_waist' => $request->lhenga_waist,
                          'lhenga_high_waist' => $request->lhenga_high_waist,
                          'lhenga_lower_waist' => $request->lhenga_lower_waist,
                          'lhenga_hip' => $request->lhenga_hip
                          


                    ]);
                                   
                 return redirect('admin/measurements/')->with('Added Succefully');
                                   
                               
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*   $measurments=User::where('user_type','user')->where('id',$id)->get();

        return view('admin/user_show',compact('measurments'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $measurments=Measure::where('id',$id)->first();

        return view('admin.measurment_edit',compact('measurments'));
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
        Measure::where('id', $id)->update([
                         'user_name' => $request->user_name,
                          'user_number' => $request->user_number,
                          'user_address' => $request->user_address,
                          'type_of_dress' => $request->type_of_dress,
                          'shirt_dot_length' => $request->shirt_dot_length,
                          'shirt_waist_line' => $request->shirt_waist_line,
                          'shirt_length' => $request->shirt_length,
                          'shirt_breast' => $request->shirt_breast,
                          'shirt_upper_chest' => $request->shirt_upper_chest,
                          'shirt_waist' => $request->shirt_waist,
                          'shirt_stomach' => $request->shirt_stomach,
                          'shirt_hip' => $request->shirt_hip,
                          'shirt_sholuder' => $request->shirt_sholuder,
                          'shirt_sleeves' => $request->shirt_sleeves,
                          'shirt_sleeves_bottom' => $request->shirt_sleeves_bottom,
                          'shirt_neck_front' => $request->shirt_neck_front,
                          'shirt_neck_back' => $request->shirt_neck_back,
                          'shirt_arm_hole' => $request->shirt_arm_hole,
                          'shirt_slits' => $request->shirt_slits,
                          'shirt_ghera' => $request->shirt_ghera,
                          
                          'pant_thighs' => $request->pant_thighs,
                          'pant_knee' => $request->pant_knee,
                          'pant_bottom' => $request->pant_bottom,
                          'pant_length' => $request->pant_length,
                          'pant_inseam_length' => $request->pant_inseam_length,
                          'pant_waist' => $request->pant_waist,
                          'pant_croach' => $request->pant_croach,
                          
                          'salwar_length' => $request->salwar_length,
                          'salwar_bottom' => $request->salwar_bottom,
                          'salwar_waist' => $request->salwar_waist,
                          
                          'chooridaar_length' => $request->chooridaar_length,
                          'chooridaar_thigh' => $request->chooridaar_thigh,
                          'chooridaar_knee' => $request->chooridaar_knee,
                          'chooridaar_calf' => $request->chooridaar_calf,
                          'chooridaar_calf' => $request->chooridaar_calf,
                          'chooridaar_bottom' => $request->chooridaar_bottom,
                          'chooridaar_waist' => $request->chooridaar_waist,
                          
                          'lhenga_length' => $request->lhenga_length,
                          'lhenga_waist' => $request->lhenga_waist,
                          'lhenga_high_waist' => $request->lhenga_high_waist,
                          'lhenga_lower_waist' => $request->lhenga_lower_waist,
                          'lhenga_hip' => $request->lhenga_hip
                          
        ]);
        
        
        

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
        
        
        
             Measure::where('id',$id)->delete();
            return redirect()->route('measurements.index')->with('success',' Deleted !!');
        
        
   
    }
    
    
    
    
    
    
    
      
         public function deleteAll(Request $request)
    {
      $ids = $request->ids;
          //print_r($ids);
        foreach($ids as $row){
             Measure::where('id',$row)->delete();
        }
        return redirect()->route('measurements.index')->with('success','Deleted !!');
    }
    
    
    
    public function update_status(Request $request){
        
        $id = $request->id;
         Measure::where('id', $id)->update([
                          'status' => $request->status
        ]);
        
          return redirect()->route('measurements.index')->with('success','Status Changed !!');
        
    }
    
    
}
