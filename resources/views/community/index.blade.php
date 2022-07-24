@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <!-- <h1>Community Page</h1> -->

        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Agents Deployed</h4>
                                
                                <div class="table-responsive">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                   
                                   
                                   
                                    <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                                    <label>Show entries:<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                     </label>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="row">
                                                        <div class=" col-sm-8 col-sm-6 text-right" style="padding-top:13px;">
                                                        <a class="btn btn-primary float-right" href="{{route('agent.create')}}">+ Create Agent</a>
                                                        </div>
                                                        <div class="col-sm-8 col-sm-6">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter" style=" padding-bottom:8px;">
                                                    <label>Search:</label>
                                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                                    
                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>





                                                
                                                
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                     <tr role="row">
                                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 101.344px;">AgentID</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 101.344px;">AgentPIN</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full Name: activate to sort column descending" style="width: 92.625px;">Full Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent Age: activate to sort column ascending" style="width: 101.344px;">Agent Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 101.344px;">Gender</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 101.344px;">Mobile</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 132.078px;">Address</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nationality: activate to sort column ascending" style="width: 132.078px;">Nationality</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Village: activate to sort column ascending" style="width: 142.078px;">Village</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assigned Assets: activate to sort column ascending" style="width: 332.078px;">Assigned Assets</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assigned Farmer: activate to sort column ascending" style="width: 97.3828px;">Assigned Farmer</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Certifications: activate to sort column ascending" style="width: 97.3828px;">Certifications</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 81.6562px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End date: activate to sort column ascending" style="width: 72.6172px;">End date</th></tr>
                                        </thead>
                                        <tbody>


                                        @foreach($agents as $agent) 
                                        <tr role="row" class="odd">
                                        <td class="sorting_1">{{$agent->agent_id}}</td>
                                        <td class="sorting_1">{{$agent->agent_pin}}</td>
                                        <td class="sorting_1">{{$agent->fullName}}</td>
                                        <td>{{$agent->age}}</td>
                                        <td>{{$agent->gender}}</td>
                                        <td>{{$agent->phoneNumber}}</td>
                                        <td>{{$agent->address}}</td>
                                        <td>{{$agent->nationality}}</td>
                                        <td>{{$agent->village}}</td>
                                        <td>{{$agent->assigned_assets}}</td>
                                        <td>{{$agent->assigned_farmer}}</td>
                                        <td>{{$agent->certifications}}</td>
                                       </tr>


                                        @endforeach
                                            
                                            
                                                
                                            
                                        <!-- 
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Akello Francis</td>
                                                <td>+25677342323</td>
                                                <td>Relief Distribution</td>
                                                <td>Central Region</td>
                                                <td>2011/04/25</td>
                                                <td>011/04/25</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">John Doe</td>
                                                <td>+256778887878</td>
                                                <td>Relief Distribution</td>
                                                <td>Central Region</td>
                                                <td>2011/04/25</td>
                                                <td>011/04/25</td>
                                            </tr>
                                            </tr> -->
                                        
                                        </tbody>
                                        
                                        
                                        
                                        
                                            <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">Full Name</th><th rowspan="1" colspan="1">Mobile</th><th rowspan="1" colspan="1">Activity</th><th rowspan="1" colspan="1">Deployment</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">End date</th></tr>
                                        </tfoot> -->
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

 @endsection       