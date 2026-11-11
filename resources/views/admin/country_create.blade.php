@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Add Country </h3>
         <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                
                    <form action="{{ url('admin/countries') }}" class="form-sample" method="post" enctype="multipart/form-data">
                        @csrf
                       
                      
                       
                       <div class="row">
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                         <input type="text" class="form-control"  name="name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Short Name</label>
                                    <div class="col-sm-9">
                                         <input type="text" class="form-control"  name="sortname" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phonecode</label>
                                    <div class="col-sm-9">
                                         <input type="number" class="form-control"  name="phonecode" required>
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
@endsection