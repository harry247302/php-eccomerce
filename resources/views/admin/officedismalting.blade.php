@extends('admin.master')


@section('content')
<div class="content-wrapper">
   
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><u>View Office Dismantling</u> </h4>
                    
                        <table>
                            <tr>
                                <th>Title</th>
                                <td>{{$ofd->title}}</td>
                            </tr>
                            
                            <tr>
                                <th>Description</th>
                                <td>{!!$ofd->description!!}</td>
                            </tr>
                            
                            <tr>
                                <th>Image</th>
                                <td><img src="{{ asset('public/images/officedismantling/'.$ofd->image) }}" alt="Office dismalting" style="width:110px"></td>
                            </tr>
                            <tr>
                                <th>Meta Title</th>
                                <td>{{$ofd->meta_title}}</td>
                            </tr>
                            <tr>
                                 <th>Meta Description</th>
                                <td>{{$ofd->meta_description}}</td>
                            </tr>
                            <tr>
                                <th>Meta Keywords</th>
                                <td>{{$ofd->meta_keywords}}</td>
                            </tr>
                           
                            
                        </table>

                  
                    <br>
                   <a href="{{ url('/admin/office_dismantling/edit/'.$ofd->id) }}" class="btn btn-info btn-lg" style="font-size:20px;">Edit </a> 
                   <a href="{{ url()->previous() }}" class="btn btn-info btn-lg" style="font-size:20px;">Back</a> 
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    table,
    th,
    td {
        border: 1px solid white;
        padding: 10px;
    }
</style>
@endsection