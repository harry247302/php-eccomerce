@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Form elements </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">View Query </h4>
                    @foreach($queries as $row)

                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Name</th>
                                <td>{{$row->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$row->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$row->phone}}</td>
                            </tr>
                             <tr>
                                <th>Subject</th>
                                <td>{{$row->subject}}</td>
                            </tr>
                             <tr>
                                <th>Message</th>
                                <td>{{$row->message}}</td>
                            </tr>
                             <tr>
                                <th>Created At</th>
                                <td>{{$row->created_at}}</td>
                            </tr>
                        </table>

                    </div>

                    @endforeach
                    <br>
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