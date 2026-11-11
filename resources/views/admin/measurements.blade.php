@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> User Measurement <a href="{{ url('admin/measurements/create') }}" class="badge badge-success" style="float:right">Add Measurement</a></h3>

    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <div class="table-responsive">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul class='text'>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <form action="#" method="post">
                            @csrf
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="selectall"> S.No. </th>
                                        <th> Order Number </th>
                                        <th> Type of Dress </th>
                                        <th> User Name </th>
                                        <th> User Number </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($measurement as $row)
                                    <tr>
                                        <td class="py-1">
                                            <input type="checkbox" name="ids[]" class="selectbox" value="{{ $row->id }}"> {{ $i }}
                                            <?php $i++;  ?>
                                        </td>
                                        <td class="py-1">
                                            {{ $row->order_number }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->type_of_dress }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->user_name }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->user_number }}
                                        </td>

                                        <td> {{ $row->status }} </td>
                                        <td>
                                              <a type="button" class="badge badge-warning" data-toggle="modal" data-target="#myModal" style="color:white">Update Status</a>
                                           
                                            <br>
                                             <a href="{{ url("admin/measurements/$row->id/edit") }}" class="badge badge-info">Edit / View</a>

                                          
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">
 
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                           
                                                        </div>
                                                        <div class="modal-body">
                                                             <h4 class="modal-title">Update Status</h4>
                                                            <form  method="post">
                                                                <input type="hidden" value="{{ $row->id }}" name="id">
                                                                <br>
                                                                @csrf
                                                                <select class="form-control" required name="status">
                                                                    <option @if($row->status == 'new') selected @endif)>new</option>
                                                                    <option @if($row->status == 'working') selected @endif>working</option>
                                                                    <option @if($row->status == 'completed') completed @endif>completed</option>
                                                                </select>
                                                                <br>
                                                                <input   formaction="{{ url('admin/measure/update_status/') }}" type="submit" value="Update now" class="btn btn-primary" style="float:right">
                                                            </form>
                                                        </div>
                                                       <!-- <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>-->
                                                    </div>

                                                </div>
                                            </div>



                                            <a onclick="return confirm('Do you Want To Delete ?')" href="{{url('admin/measure', $row->id)}}" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="selectall2"> S.No. </th>
                                        <th> Order Number </th>
                                        <th> Type of Dress </th>
                                        <th> User Name </th>
                                        <th> User Number </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                            </table>





                            <input formaction="{{url('admin/measure/deleteAll')}}" type="submit" class="btn btn-danger" value="Delete Selected " onclick="return confirm('Do you Want To Delete ?')">




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection