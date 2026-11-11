@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Product Management  <a href="{{ url('admin/products/create') }}" class="badge badge-success" style="float:right">Add Product</a></h3>
        
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
                                    <th><input type="checkbox" class="selectall">  S.No. </th>
                                    <th> Name </th>
                                    <th> Url </th>
                                    <th> Image </th>
                                    <th> Is Popular ? </th>
                                    <th> Is Featured ? </th>
                                    <th> Is Hot ? </th>
                                    <th> Is Best ? </th>
                                    <th> Is New ? </th>
                                    <th> Is Special offer ? </th>
                                    <th> Is Home ? </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($products as $row)
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
                                            <img src="{{asset('public/images/products/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                        </td>

                                        <td class="py-1">
                                            {{ $row->is_popular }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->is_featured }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->is_hot }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->is_best }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->is_new_arraival }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->is_special_offer }}
                                        </td>
                                        <td class="py-1">
                                            {{ $row->set_as_home }}
                                        </td>
                                    <td> {{ $row->product_status }} </td>
                                    
                                     
                                    <td>
                                        <a href="{{ url("admin/products/$row->id/edit") }}" class="badge badge-info">Edit</a>
                                        <a onclick="return confirm('Do you Want To Delete ?')" href="{{url('admin/product', $row->id)}}" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                             <thead>
                                <tr>
                                    <th><input type="checkbox" class="selectall2">  S.No. </th>
                                    <th> Name </th>
                                    <th> Url </th>
                                    <th> Image </th>
                                    <th> Is Popular ? </th>
                                    <th> Is Featured ? </th>
                                    <th> Is Hot ? </th>
                                    <th> Is Best ? </th>
                                    <th> Is New ? </th>
                                    <th> Is Special offer ? </th>
                                    <th> Is Home ? </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                        </table>
                        
                        
                                 <input formaction="{{url('admin/product/setPopularAll')}}" type="submit" class="btn btn-success" value="Set Popular ">



                            <input formaction="{{url('admin/product/setFeatureAll')}}" type="submit" class="btn btn-success" value="Set Feature ">


                            <input formaction="{{url('admin/product/setHotAll')}}" type="submit" class="btn btn-success" value="Set Hot ">


                            <input formaction="{{url('admin/product/setBestAll')}}" type="submit" class="btn btn-success" value="Set Best">


                            <input formaction="{{url('admin/product/setNewAll')}}" type="submit" class="btn btn-success" value="Set New Arrival ">

                            <input formaction="{{url('admin/product/setOfferAll')}}" type="submit" class="btn btn-success" value="Set Special Offer">


                            <input formaction="{{url('admin/product/setHomeAll')}}" type="submit" class="btn btn-success" value="Set On Home">
                          
                            <hr>
                            
                           <input formaction="{{url('admin/product/deleteAll')}}" type="submit" class="btn btn-danger" value="Delete Selected " onclick="return confirm('Do you Want To Delete ?')">

                            <input formaction="{{url('admin/product/disableAll')}}" type="submit" class="btn btn-secondary" value="Disable Selected ">



                            <input formaction="{{url('admin/product/enableAll')}}" type="submit" class="btn btn-primary" value="Enable Selected ">
               
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection