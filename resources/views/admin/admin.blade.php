@extends('layouts.admin')

@section('content')

    
        <!-- main-panel ends -->
       
        <div class="content-wrapper">
        <div class="container">
  <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
   
    </section>

<!-- Main content -->
<!-- <section class="content"> -->
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <!-- <h3 class="box-title">Activities</h3> -->

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <!-- style="border:1px solid #f4f4f4" -->
            <div class="col-lg-6 col-md-12"   >

             
              <div class="card">
                <div class="card-body">
                  <h3 class="box-title">Activities</h3>
                  <div class="row">
                    <div class="col-lg-8 col-md-12">
                      <div class="bootstrap-carousel">
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                             <!--<div class="carousel-item">
                                    <div class="card card-widget" id="distribution">
                                        <div class="card-body">
                                          <h6>Relief distribution </h6>
                                          <small>Activity category</small>
                                          <br>
                                          <h6>Description of activity, in real detail, goals and all........</h6>
                                          <br>
                                          <div class="row">
                                            <div class="col-lg-4 col-md-3">
                                              <small>Start Date</small>
                                              <h6>02/21</h6>
                                            </div>
                                            <div class="col-lg-4 col-md-3">
                                              <small>End Date</small>
                                              <h6>6/21</h6>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card card-widget" id="distribution">
                                        <div class="card-body">
                                          <h6>Pad distribution </h6>
                                          <small>Activity category</small>
                                          <br>
                                          <h6>Description of activity, in real detail, goals and all........</h6>
                                          <br>
                                          <div class="row">
                                            <div class="col-lg-4 col-md-3">
                                              <small>Start Date</small>
                                              <h6>02/21</h6>
                                            </div>
                                            <div class="col-lg-4 col-md-3">
                                              <small>End Date</small>
                                              <h6>6/21</h6>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>-->
                              </div><a class="carousel-control-prev" href="#carouselExampleControls" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleControls" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-12" style="text-align:right; border-left: 1px solid rgba(0, 0, 0, 0.1);">
                      <h3 style="color: #7571F9;">{{$totalBeneficiaries}} </h3>
                      <small>Total Beneficiaries</small>
                      <h4> {{$totalFemales}}</h4>
                      <small>Female</small>
                      <h4>{{$totalMales}}</h4>
                      <small>Male</small>
                      <br><br><br>
                      <h3><i class="fa fa-download" style="color: #7571F9;"></i></h3>
                      <small>Download Report</small>
                  </div>
                  </div>
                </div>

              </div>
      
              
             
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
           <div class="col-lg-6 col-md-12">
                  <h4 class="card-title">Goals <i class="fa fa-plus-circle" aria-hidden="true" style="color: #F29D56;"></i></h4>
                    <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-widget">
                            <div class="card-body">
                              <h4>{{$totalBeneficiaries}}</h4>
                              <h3><i class="fa fa-users" style="color: #7571F9;"></i></h3>
                              <h6>Beneficiaries</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-widget">
                            <div class="card-body">
                              <h4>{{$activities}}</h4>
                              <h3><i class="fa fa-map-marker" style="color: #F29D56;"></i></h3>
                              <h6>Activities</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-widget">
                            <div class="card-body">
                              <h4>{{$attendance}}</h4>
                              <h3><i class="fa fa-user" style="color: #6FD96F;"></i></h3>
                              <h6>Attendace</h6>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <br>
                    <h4 class="card-title">Satisfactions Metrics</h4>
                    <h5 class="mt-3">
                      <div class="progress" style="height: 9px; width:60%;">
                          <div class="progress-bar bg-warning wow  progress-" style="width: 52%;" role="progressbar"><span class="sr-only">60% Complete</span>
                          </div>
                      </div>
                      <span class="small">Fully Satisfied</span>
                      <span class="float-right" style="margin-top:-8px;">52%</span>
                    </h5>
                    <h5 class="mt-3">
                      <div class="progress" style="height: 9px; width:60%;">
                          <div class="progress-bar bg-success wow  progress-" style="width: 21%;" role="progressbar"><span class="sr-only">60% Complete</span>
                          </div>
                      </div>
                      <span class="small">Satisfied</span>
                      <span class="float-right" style="margin-top:-8px;">21%</span>
                    </h5>
                    <h5 class="mt-3">
                      <div class="progress" style="height: 9px; width:60%;">
                          <div class="progress-bar bg-primary wow  progress-" style="width: 74%;" role="progressbar"><span class="sr-only">60% Complete</span>
                          </div>
                      </div>
                      <span class="small">Not satisfied</span>
                      <span class="float-right" style="margin-top:-8px;">74%</span>
                    </h5>
                  </div>
              </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                <h5 class="description-header">854</h5>
                <span class="description-text">FARMER ENGAGEMENT</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                <h5 class="description-header">4590</h5>
                <span class="description-text">SEEDING DISTRIBUTION</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                <h5 class="description-header">2813.53</h5>
                <span class="description-text">SEEDING SURVIVAL</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block">
                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                <h5 class="description-header">1200</h5>
                <span class="description-text">ACREAGE COVERED</span>
              </div>
              <!-- /.description-block -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Beneficiaries</h4>
              <div class="table-responsive">
                  <table class="table header-border">
                      <thead>
                          <tr>
                              <th scope="col">Reciever</th>
                              <th scope="col">Activity Name</th>
                              <th scope="col">Date</th>
                          </tr>
                      </thead>
                      <tbody>

                      @foreach($attendances as $attendent)

               <td><i class="fa fa-user-circle" aria-hidden="true"></i>&amp;{{$attendent->beneficiary}}</td>
                              <td>{{$attendent->activity_name}}</td>
                              <td>{{$attendent->created_at}}</td>
                          </tr>
                        @endforeach
                                                                            </tbody>
                  </table>
              </div>
          </div>
      </div>
      </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
<!-- </section> -->
        </div>
         </div>


@endsection