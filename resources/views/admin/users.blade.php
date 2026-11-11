@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> User Management <a href="{{ url('admin/users/create') }}" class="badge badge-info" style="float:right">Add User</a></h3>  
       
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
                                    <th> <input type="checkbox" class="selectall"> S.No. </th>
                                    <th> Name </th>
                                    <th> Mobile </th>
                                    <th> Email </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($users as $row)
                                <tr>
                                    <td class="py-1">
                                        <input type="checkbox" name="ids[]" class="selectbox" value="{{ $row->id }}" >  {{ $i }}.
                                        <?php $i++;  ?>
                                    </td>
                                    <td class="py-1">
                                       {{ $row->first_name }} {{ $row->last_name }}
                                    </td>
                                    <td> {{ $row->mobile }} </td>
                                    <td> {{ $row->email }} </td>
                                    <td>
                                        <a href="{{ url("admin/users/$row->id/edit") }}" class="badge badge-info">Edit</a>
                                        @if(Auth::user()->id != $row->id)
                                        <a onclick="return confirm('Do you Want To Delete ?')" href="{{url('admin/admin', $row->id)}}" class="badge badge-danger">Delete</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                             <thead>
                                <tr>
                                    <th> <input type="checkbox" class="selectall2"> S.No. </th>
                                    <th> Name </th>
                                    <th> Mobile </th>
                                    <th> Email </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                        </table>
                        <input formaction="{{url('admin/user/deleteAll')}}" type="submit" class="btn btn-danger" value="Delete Selected ">                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection