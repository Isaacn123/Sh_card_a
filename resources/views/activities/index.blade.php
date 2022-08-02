@extends(
    'layouts.admin'
)


@section('content')

<div class="content-wrapper">
<div class="container">
    <!-- <h2>Acivities Page</h2> -->
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Activities</h4>
                                <div class="row">
                                <div class ="col-lg-12 text-right" style=" padding:5px 0;">
                                <a class="btn btn-primary float-right" href="#">+ Create Activity</a>
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Training ID</th>
                                                <th>User ID</th>
                                                <th>Training Name</th>
                                                <th>Training Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($trainings as $training)
                                             <tr>
                                                
                                                <td>{{$training->training_id}}</td>
                                                <td>{{$training->user_id}}</td>
                                                <td>{{$training->training_name}}</td>
                                                <td>{{$training->training_description}}</td>
                                                <td>{{$training->training_start_date}}</td>
                                                <td>{{$training->training_end_date}}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="#">View</a>
                                                </td>
                                            </tr>

                                            @endforeach

                                            <!-- <td>TR-7019</td>
                                                <td>9</td>
                                                <td>Market Needs &amp; Ideation</td>
                                                <td>Generate scalable business ideas based on market needs</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-30</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td> -->
                                                                                      
                                                                                   
                                             
                                              
                                                                                    </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Training ID</th>
                                                <th>Agent ID</th>
                                                <th>Training Name</th>
                                                <th>Training Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>

@endsection