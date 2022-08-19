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
                                                
                                                <th style="width: 21.344px;">#</th>
                                                <th style="width: 31.344px;">DateTime</th>
                                                <th style="width: 51.344px;">Code</th>
                                                <th style="width: 51.344px;">Title</th>
                                                <th style="width: 41.344px;">URL</th>
                                                <th style="width: 111.344px;">Action</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($forms as $form) 
                                             <tr>
                                                
                                                <td>{{$form->id}}</td>
                                                <!-- M d,Y h:i A -->
                                                <td>{{date("M d,Y",strtotime($form->created_at))}}</td>
                                                <td>{{$form->form_code}}</td>
                                                <td>{{$form->title}}</td>
                                                <td>{{$form->fname}}</td>
                                                <td>
                                                <!-- <a href="?p=view_form&code={{$form->form_code}}" class="btn btn-default border">View</a> -->
                                             <a class="btn btn-warning" href="{{url('assessment/viewform',$form->id)}}">View</a>
                                             <a href="{{url('assessment/view_responses',$form->id)}}" class="btn btn-default border">Responses</a>
                                                </td>
                                            </tr>

                                            @endforeach

                                                           
                                             
                                              
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