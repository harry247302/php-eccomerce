@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Gallery Management  <a href="{{ url('admin/galleries/create') }}" class="badge badge-success" style="float:right">Add image</a></h3>
           
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
                                    <th> Image </th>
                                    <th> Set on Home </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($images as $row)
                                <tr>
                                    <td class="py-1">
                                       <input type="checkbox" name="ids[]" class="selectbox" value="{{ $row->id }}" > {{ $i }}
                                        <?php $i++;  ?>
                                    </td>
                                    <td class="py-1">
                                      {{ $row->name }}
                                    </td>
                                    <td> <img src="{{ asset('public/images/galleries/'.$row->image) }}" style="width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"></td>
                                     <td class="py-1">
                                      {{ $row->set_as_home }}
                                    </td>
                                    
                                  
                                    
                                    <td> {{ $row->status }} </td>
                                    <td>
                                        <a href="{{ url("admin/galleries/$row->id/edit") }}" class="badge badge-info">Edit</a>
                                        <a onclick="return confirm('Do you Want To Delete ?')" href="{{url('admin/gallery', $row->id)}}" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                             <thead>
                                <tr>
                                    <th><input type="checkbox" class="selectall"> S.No. </th>
                                    <th> Name </th>
                                    <th> Image </th>
                                    <th> Set on Home </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                        </table>
                         <input formaction="{{url('admin/gallery/deleteAll')}}" type="submit" class="btn btn-danger" value="Delete Selected " onclick="return confirm('Do you Want To Delete ?')">

                            <input formaction="{{url('admin/gallery/disableAll')}}" type="submit" class="btn btn-secondary" value="Disable Selected ">



                            <input formaction="{{url('admin/gallery/enableAll')}}" type="submit" class="btn btn-primary" value="Enable Selected ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection