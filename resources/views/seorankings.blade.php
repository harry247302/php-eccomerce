@extends('layouts.master')
@section('headers')
<!-- Title -->
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
@endsection

@section('content')

<!-- Inner Banner Area -->
<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>SEO Ranking of <b>Projects</b></h3>
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li>SEO Ranking of <b>Projects</b></li>
            </ul>
        </div>
    </div>

    <div class="inner-banner-shape">
        <div class="shape-one">
            <img src="{{asset('public/img/inner-banner/banner-shape1.png')}}" alt="Images">
        </div>

        <div class="shape-two">
            <img src="{{asset('public/img/inner-banner/banner-shape2.png')}}" alt="Images">
        </div>

        <div class="shape-three">
            <img src="{{asset('public/img/inner-banner/banner-shape3.png')}}" alt="Images">
        </div>

        <div class="inner-banner-dots">
            <img src="{{asset('public/img/shape/dots-shape.png')}}" alt="Images">
        </div>
    </div>
</div>
<!-- Inner Banner Area End -->



<div class="">
    <div class="container-fluid">
        

        <div class="">
            <div class="row">
                   <?php  $i=1; ?>
                @foreach($seorankings_pro as $row)
                
                <div class="col-lg-6 col-sm-12" style="width:100%; margin-top:30px;">
                   
                       <div class="row" style="padding:10px;">
                         <div class="col-md-8">
                             <b style="color:Orange">  {{ $row->title }} </b>
                         </div>
                         <div class="col-md-4">
                             <a href="{{ $row->project_url }}" class="btn btn-info btn-xs " target="_blank" style="float:right;">Visit Website</a>
                         </div>
                         </div>
                        <?php $seolist = App\Model\Seoranking::where('status','enable')->where('project_id',$row->id)->first(); ?>
                         <div style=" height:250px; overflow:scroll ">
                        <!--Table-->
                        <table class="table table-striped table-bordered" style="border:1px solid black; border-top:2px solid balck;">
                            
                            <!--Table head-->
                            <thead>
                                <tr  class="table-info">

                                    <th>KEYWORD</th>
                                    <th>RANKING</th>
                                    <th>SEARCH ENGINE</th>

                                </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                              
                              <? $myArray = explode(',', $seolist->keyword); $count  = count($myArray); ?>
                              <? $myArray_result = explode(',', $seolist->page_result); $count  = count($myArray); ?>
                               @for($i=0;$i<$count;$i++)
                                <tr>

                                    <td>{{ $myArray[$i] }}</td>
                                    <td>{{ $myArray_result[$i] }}</td>
                                    <td>Google.com</td>

                                </tr>
                              @endfor
                            </tbody>
                            <!--Table body-->


                        </table>
                        <!--Table-->
                    </div>
                </div>
                <?php  $i++; ?>
                @endforeach 
             
                <br>


                <style>
                    th {
                        font-size: 13px;

                    }

                    td {
                        font-size: 13px;
                        padding: 5px;
                    }

                    .table td,
                        {
                        padding: 0.25rem;
                    }

                    .table th {
                        position: sticky;
                    }

                    .btn {
                        padding: 0.175rem .25rem;
                        font-size: 10px;
                    }
                </style>
            </div>
           
        </div>
    </div>

    <div class="pricing-shape">
        <div class="shape1">
            <img src="{{asset('public/img/shape/shape7.png')}}" alt="Images">
        </div>
        <div class="shape2">
            <img src="{{asset('public/img/shape/shape4.png')}}" alt="Images">
        </div>
        <div class="shape3">
            <img src="{{asset('public/img/shape/shape5.png')}}" alt="Images">
        </div>
        <div class="shape4">
            <img src="{{asset('public/img/shape/shape6.png')}}" alt="Images">
        </div>
        <div class="shape5">
            <img src="{{asset('public/img/shape/shape4.png')}}" alt="Images">
        </div>
        <div class="shape6">
            <img src="{{asset('public/img/shape/shape8.png')}}" alt="Images">
        </div>
    </div>
</div>

<br><br>

<!-- Contact Map -->
<div class="contact-map">
    <div class="container-fluid m-0 p-0">
        <iframe src="{{ $company->google_map }}" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- Map Area End --><br>
@endsection