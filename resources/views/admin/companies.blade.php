@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Company Management    <a href="{{ url('admin/companies/create') }}" class="badge badge-info" style="float:right">Add Company</a></h3>
        
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
                                    <th> Name </th>
                                    <th> Owner Name </th>
                                    <th> Mobile </th>
                                    <th> email </th>
                                    <th> Status </th>
                                    
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($companies as $row)
                                <tr>
                                    <td class="py-1">
                                         <input type="checkbox" name="ids[]" class="selectbox" value="{{ $row->id }}" > {{ $i }}
                                        <?php $i++;  ?>
                                    </td>
                                    <td class="py-1">
                                      {{ $row->name }}
                                    </td>
                                     <td class="py-1">
                                      {{ $row->owner_name }}
                                    </td>
                                    <td> {{ $row->mobile }} </td>
                                    <td> {{ $row->email }} </td>
                                    <td> {{ $row->status }} </td>
                                   
                                    <td>
                                        <a href="{{ url("admin/companies/$row->id/edit") }}" class="badge badge-info">Edit</a>
                                        <a onclick="return confirm('Do you Want To Delete ?')" href="{{url('admin/company', $row->id)}}" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                  @endforeach
                                 <thead>
                                <tr>
                                    <th><input type="checkbox" class="selectall2"> S.No. </th>
                                    <th> Name </th>
                                    <th> Mobile </th>
                                    <th> email </th>
                                    <th> Status </th>
                                    <th> Created at </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                              
                            </tbody>
                        </table>
                         <input formaction="{{url('admin/company/deleteAll')}}" type="submit" class="btn btn-danger" value="Delete Selected ">    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection