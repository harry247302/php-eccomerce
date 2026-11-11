@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Menu and Pages Management  <a href="{{ url('admin/cmspages/create') }}" class="badge badge-success" style="float:right">Add Page</a></h3>
        
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
                                    <th> Page Name </th>
                                    <th> Page URL </th>
                                    <th> Image </th>
                                    <th> Meta Title </th>
                                    <th> Meta Description </th>
                                    <th> Meta Keywords </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($cmspages as $row)
                                <tr>
                                    <td class="py-1">
                                          <input type="checkbox" name="ids[]" class="selectbox" value="{{ $row->id }}" > {{ $i }}
                                        <?php $i++;  ?>
                                    </td>
                                    <td class="py-1">
                                      {{ $row->name }}
                                    </td>
                                     <td class="py-1">
                                      {{ $row->url }}
                                    </td>
                                     <td class="py-1">
                                      <img src="{{asset('public/images/cmspages/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                    </td>
                                     <td class="py-1">
                                      
                                     {{ Illuminate\Support\Str::limit($row->meta_title, 30)}}
                                    </td>
                                    
                                    <td class="py-1">
                                      
                                     {{ Illuminate\Support\Str::limit($row->meta_description, 30)}}
                                    </td>
                                    
                                    <td class="py-1">
                                      
                                     {{ Illuminate\Support\Str::limit($row->meta_keywords, 30)}}
                                    </td>

                                    <td> {{ $row->page_status }} </td>
                                    <td>
                                        <a href="{{ url("admin/cmspages/$row->id/edit") }}" class="badge badge-info">Edit</a>
                                        <a onclick="return confirm('Do you Want To Delete ?')" href="{{url('admin/cmspage', $row->id)}}" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="selectall2"> S.No. </th>
                                    <th> Page Name </th>
                                    <th> Page URL </th>
                                    <th> Image </th>
                                    <th> Meta Title </th>
                                    <th> Meta Description </th>
                                    <th> Meta Keywords </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                        </table>
                         <input formaction="{{url('admin/cmspage/deleteAll')}}" type="submit" class="btn btn-danger"  value="Delete Selected " onclick="return confirm('Do you Want To Delete ?')">  
                         
                          <input formaction="{{url('admin/cmspage/disableAll')}}" type="submit" class="btn btn-secondary" value="Disable Selected ">  
                          
                          
                          
                          <input formaction="{{url('admin/cmspage/enableAll')}}" type="submit" class="btn btn-primary"  value="Enable Selected ">  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection