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




                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Shirt')">Shirt Measurement </button>
                        <button class="tablinks" onclick="openCity(event, 'Pant')">Pant Measurement </button>
                        <button class="tablinks" onclick="openCity(event, 'Salwar')">Salwar Measurement </button>
                        <button class="tablinks" onclick="openCity(event, 'Chooridaar')">Chooridaar </button>
                        <button class="tablinks" onclick="openCity(event, 'Lhenga')">Lhenga Measurement  </button>
                    </div>

                    <div id="Shirt" class="tabcontent">
                        <div>
                        <h3 style="text-decoration:underline" align="center">Shirt Measurement</h3>

                        <form action="{{ url('admin/measurements') }}" class="form-sample" method="post" enctype="multipart/form-data" style="margin-top:40px;">
                            @csrf

                            <input type="hidden" value="Shirt Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Dot Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_dot_length" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Waist Line</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_waist_line" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_length" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Breast</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_breast" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Upper Chest</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_upper_chest" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_waist" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Stomatch</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_stomach" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Hip</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_hip" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Shoulder</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_sholuder" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Sleeves</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_sleeves" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Sleeves Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_sleeves_bottom" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Neck Front</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_neck_front" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Neck Back</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_neck_back" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Arm Hole</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_arm_hole" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Slits</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_slits" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Shirt Ghera</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="shirt_ghera" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>

                        </form>
                        </div>
                    </div>

                  
                     <div id="Pant" class="tabcontent">
                        <div>
                        <h3 style="text-decoration:underline" align="center">Pant Measurement</h3>

                        <form action="{{ url('admin/measurements') }}" class="form-sample" method="post" enctype="multipart/form-data" style="margin-top:40px;">
                            @csrf

                            <input type="hidden" value="Pant Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Thighs</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_thighs" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Knee</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_knee" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_bottom" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_length" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Inseam Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_inseam_length" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_waist" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pant Croach</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pant_croach" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>

                        </form>
                        </div>
                    </div>

                  
                    
                     <div id="Salwar" class="tabcontent">
                        <div>
                        <h3 style="text-decoration:underline" align="center">Salwar Measurement</h3>

                        <form action="{{ url('admin/measurements') }}" class="form-sample" method="post" enctype="multipart/form-data" style="margin-top:40px;">
                            @csrf

                            <input type="hidden" value="Salwar Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Salwar Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="salwar_length" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Salwar Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="salwar_bottom" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Salwar Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="salwar_waist" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>

                        </form>
                        </div>
                    </div>

                  
                    
                     <div id="Chooridaar" class="tabcontent">
                         <div>
                        <h3 style="text-decoration:underline" align="center">Chooridaar Measurement</h3>

                        <form action="{{ url('admin/measurements') }}" class="form-sample" method="post" enctype="multipart/form-data" style="margin-top:40px;">
                            @csrf

                            <input type="hidden" value="Chooridaar Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_length" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Thigh</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_thigh" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Knee</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_knee" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Calf</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_calf" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Bottom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_bottom" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chooridaar Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chooridaar_waist" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        
                            
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>

                        </form>
                        </div>
                    </div>

                  
                    
                     <div id="Lhenga" class="tabcontent">
                       <div>
                        <h3 style="text-decoration:underline" align="center">Lhenga Measurement</h3>

                        <form action="{{ url('admin/measurements') }}" class="form-sample" method="post" enctype="multipart/form-data" style="margin-top:40px;">
                            @csrf

                            <input type="hidden" value="Lhenga Measurement" name="type_of_dress">
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_number" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_address" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Length</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_length" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_waist" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga High Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_high_waist" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Lower Waist</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_lower_waist" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lhenga Hip</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lhenga_hip" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             
                            
                         
                            <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>

                        </form>
                        </div>
                    </div>

                  


                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
@endsection