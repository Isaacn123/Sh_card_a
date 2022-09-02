@extends('layouts.admin')


@section('content')

<div class="content-wrapper">
    <div class="container">
    <h1>Farmer Assessments</h1>

    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Farmers</h4>
                                <div class="row">
                                <div class ="col-lg-12 text-right" style=" padding:5px 0;">
                                <!-- <a class="btn btn-primary float-right" href="{{url('manage')}}">+ Create Forms</a> -->
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0">
                                        <thead>
                                            <tr>
                                                
                                                <th style="width: 10.344px;"># UID</th>
                                                <th style="width: 31.344px;">DateTime</th>
                                                <th style="width: 51.344px;">Assessment Name</th>
                                                <th style="width: 51.344px;">Farm Assessment ID</th>
                                                <th style="width: 31.344px;">Beneficiary</th>
                                                <th style="width: 51.344px;">Score</th>
                                                <th style="width: 51.344px;">Status</th>
                                                <th style="width: 121.344px;">Action</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($assessments as $assessment) 
                                             <tr>
                                                
                                                <td>{{$assessment->farmer_assessment_id}}</td>
                                                <!-- M d,Y h:i A -->
                                                <td>{{date("M d,Y",strtotime($assessment->created_at))}}</td>
                                                <td>{{$assessment->assessment_name}}</td>
                                                <td>{{$assessment->assessment_farm_id}}</td>

                                                <td>{{$assessment->beneficiary_id}}</td>
                                                <td>{{$assessment->questions->sum('answer_score')}}</td>

                                                <td>
                                                @if($assessment->questions->sum('answer_score') <> 7)
                                                <div style="color:red; font-size:18px; font-weight:500"> Faild</div>
                                                @else
                                             <div style="color:green;font-size:18px; font-weight:500"> Passed</div>
                                                 @endif
                                                </td>
                                               
                                                <td>
                    
                                             <a class="btn btn-warning" href="">View</a>
                                             @if($assessment->status == true)
                                             <a id="button" class="btn float-right" style="background:#535c63; color:#fff;" href="#" onclick="">Approve</a>
                                             @elseif($assessment->questions->sum('answer_score') <> 7)
                                             <a id="button" class="btn btn-danger float-right" href="#" onclick="">DISABLED</a>
                                             @elseif($assessment->status == true)
                                             <a id="button" class="btn float-right" style="background:#535c63; color:#fff;" href="#" onclick="">Approve</a>
                                             @else
                                             <a id="button" class="btn btn-primary float-right" href="#" onclick="approve({{$assessment->id}},{{$assessment->beneficiary_id}},'button', '#101010')">Approve</a>
                                             
                                             @endif

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

@section('scripts')
<script>
    var count = 1;
   function approve(id,beneficiary,btn,color){
    
   console.log("Testing here",id,beneficiary);

   $.ajax({
    type: 'POST',
    url: "{{url('approve')}}"  +'/'+ id,
    success: function(data){
        console.log('approve: ', data);
        var property = document.getElementById(btn);
         window.location.href = "/assessmentfarmers";
        if (count == 0) {
            property.style.backgroundColor = "#535c63"
            count = 1;        
        }
        else {
            property.style.backgroundColor = "#535c63"
            count = 0;
        }
    }
    
});

   }
</script>
@endsection