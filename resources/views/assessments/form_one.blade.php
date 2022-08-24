@extends('layouts.admin')


@section('content')

<div class="content-wrapper">
    <div class="container">
    <h1>Assessment form 1</h1>

    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Forms</h4>
                                <div class="row">
                                <div class ="col-lg-12 text-right" style=" padding:5px 0;">
                                <a class="btn btn-primary float-right" href="{{url('manage')}}">+ Create Forms</a>
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0">
                                        <thead>
                                            <tr>
                                                
                                                <th style="width: 21.344px;"># Assessment ID</th>
                                                <th style="width: 31.344px;">DateTime</th>
                                                <th style="width: 51.344px;">Assessment Name</th>
                                                <th style="width: 51.344px;">Beneficiary</th>
                                                <th style="width: 41.344px;">Percentage</th>
                                                <th style="width: 111.344px;">Action</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($assessments as $assessment) 
                                             <tr>
                                                
                                                <td>{{$assessment->assessment_id}}</td>
                                                <!-- M d,Y h:i A -->
                                                <td>{{date("M d,Y",strtotime($assessment->created_at))}}</td>
                                                <td>{{$assessment->assessment_name}}</td>
                                                <td>{{$assessment->beneficiary_id}}</td>
                                                <td>100%</td>
                                                <td>
                    
                                             <a class="btn btn-warning" href="">View</a>
                                             <a href="" class="btn btn-default border">Delete</a>
                                                </td>
                                            </tr>

                                            @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>


@endsection