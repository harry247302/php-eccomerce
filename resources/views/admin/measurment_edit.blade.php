@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Add Measurement </h3>
        <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">




                   

                    @if($measurments->type_of_dress == 'Shirt Measurement')
                       <div>
                        <h3 style="text-decoration:underline" align="center">Shirt Measurement</h3>

                      {!! Form::open(array('url' =>'admin/measurements/'.$measurments->id, 'method'=>"PUT"  , 'files' => true)) !!}

                            <input type="hidden" value="Shirt Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" value="{{ $measurments->user_name }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" value="{{ $measurments->user_number }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" value="{{ $measurments->user_address }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Dot Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_dot_length" value="{{ $measurments->shirt_dot_length }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Waist Line</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_waist_line" value="{{ $measurments->shirt_waist_line }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_length" value="{{ $measurments->shirt_length }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Breast</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_breast" value="{{ $measurments->shirt_breast }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Upper Chest</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_upper_chest" value="{{ $measurments->shirt_upper_chest }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_waist" value="{{ $measurments->shirt_waist }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Stomatch</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_stomach" value="{{ $measurments->shirt_stomach }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Hip</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_hip" value="{{ $measurments->shirt_hip }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Shoulder</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_sholuder" value="{{ $measurments->shirt_sholuder }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Sleeves</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_sleeves" value="{{ $measurments->shirt_sleeves }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Sleeves Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_sleeves_bottom" value="{{ $measurments->shirt_sleeves_bottom }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Neck Front</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_neck_front" value="{{ $measurments->shirt_neck_front }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Neck Back</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_neck_back" value="{{ $measurments->shirt_neck_back }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Arm Hole</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_arm_hole" value="{{ $measurments->shirt_arm_hole }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Slits</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_slits" value="{{ $measurments->shirt_slits }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Ghera</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_ghera" value="{{ $measurments->shirt_ghera }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7; width:20%;  float:right">Update</button>

                        </form>
                        </div>
                   @endif
                    
                    
                    
                     @if($measurments->type_of_dress == 'Pant Measurement')
                     <div>
                        <h3 style="text-decoration:underline" align="center">Pant Measurement</h3>

                      {!! Form::open(array('url' =>'admin/measurements/'.$measurments->id, 'method'=>"PUT"  , 'files' => true)) !!}
                            @csrf

                            <input type="hidden" value="Pant Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" value="{{ $measurments->user_name }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" value="{{ $measurments->user_number }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" value="{{ $measurments->user_address }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Thighs</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_thighs" value="{{ $measurments->pant_thighs }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Knee</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_knee" value="{{ $measurments->pant_knee }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_bottom" value="{{ $measurments->pant_bottom }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_length" value="{{ $measurments->pant_length }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Inseam Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_inseam_length" value="{{ $measurments->pant_inseam_length }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_waist" value="{{ $measurments->pant_waist }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Croach</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_croach" value="{{ $measurments->pant_croach }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7; width:20%;  float:right">Update</button>

                        </form>
                        </div>
                      @endif
                   
                       
                  
                   
                    
                   @if($measurments->type_of_dress == 'Salwar Measurement')
                        <div>
                        <h3 style="text-decoration:underline" align="center">Salwar Measurement</h3>

                    {!! Form::open(array('url' =>'admin/measurements/'.$measurments->id, 'method'=>"PUT"  , 'files' => true)) !!}
                            @csrf

                            <input type="hidden" value="Salwar Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" value="{{ $measurments->user_name }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" value="{{ $measurments->user_number }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" value="{{ $measurments->user_address }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Salwar Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="salwar_length" value="{{ $measurments->salwar_length }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Salwar Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="salwar_bottom" value="{{ $measurments->salwar_bottom }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Salwar Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="salwar_waist" value="{{ $measurments->salwar_waist }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7; width:20%;  float:right">Update</button>

                        </form>
                        </div>
                   @endif
                  
                    
                  
                    
                    
                         @if($measurments->type_of_dress == 'Chooridaar Measurement')
                         <div>
                        <h3 style="text-decoration:underline" align="center">Chooridaar Measurement</h3>

                       {!! Form::open(array('url' =>'admin/measurements/'.$measurments->id, 'method'=>"PUT"  , 'files' => true)) !!}
                            @csrf

                            <input type="hidden" value="Chooridaar Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" value="{{ $measurments->user_name }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" value="{{ $measurments->user_number }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" value="{{ $measurments->user_address }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_length" value="{{ $measurments->chooridaar_length }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Thigh</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_thigh" value="{{ $measurments->chooridaar_thigh }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Knee</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_knee" value="{{ $measurments->chooridaar_knee }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Calf</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_calf" value="{{ $measurments->chooridaar_calf }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_bottom" value="{{ $measurments->chooridaar_bottom }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_waist" value="{{ $measurments->chooridaar_waist }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        
                            
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7; width:20%;  float:right">Update</button>

                        </form>
                        </div>
                         @endif

                  
                    
                  
                     @if($measurments->type_of_dress == 'Lhenga Measurement')
                       <div>
                        <h3 style="text-decoration:underline" align="center">Lhenga Measurement</h3>
 {!! Form::open(array('url' =>'admin/measurements/'.$measurments->id, 'method'=>"PUT"  , 'files' => true)) !!}
                            @csrf

                            <input type="hidden" value="Lhenga Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" value="{{ $measurments->user_name }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" value="{{ $measurments->user_number }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" value="{{ $measurments->user_address }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_length" value="{{ $measurments->lhenga_length }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_waist" value="{{ $measurments->lhenga_waist }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga High Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_high_waist" value="{{ $measurments->lhenga_high_waist }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Lower Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_lower_waist" value="{{ $measurments->lhenga_lower_waist }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Hip</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_hip" value="{{ $measurments->lhenga_hip }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7; width:20%;  float:right">Update</button>

                        </form>
                        </div>
                     @endif

                  


                </div>
            </div>
        </div>
    </div>
</div>

@endsection