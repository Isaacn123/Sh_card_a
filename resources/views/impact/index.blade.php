@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <!-- <h1>Impact Page</h1> -->
        <div class="row">
                    <div class="col-lg-8 col-md-12">
                          <div class="card">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1SYAIBmrR6TZYHezITtT299PoO1HG2JBA&amp;ehbc=2E312F" width="100%" height="480"></iframe>
                          </div>
                        </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-widget">
                                <div class="card-body">
                                  <h4>200,000</h4>
                                  <h3><i class="fa fa-users" style="color: #7571F9;"></i></h3>
                                  <h6>Beneficiaries</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-widget">
                                <div class="card-body">
                                  <h4>25</h4>
                                  <h3><i class="fa fa-map-marker" style="color: #F29D56;"></i></h3>
                                  <h6>Activities</h6>
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
                </div>
        </div>
        </div>
@endsection