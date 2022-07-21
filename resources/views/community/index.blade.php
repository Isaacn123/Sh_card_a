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
                                                        <a class="btn btn-primary float-right" href="#">+ Create Agent</a>
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
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full Name: activate to sort column descending" style="width: 92.625px;">Full Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 101.344px;">Mobile</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Activity: activate to sort column ascending" style="width: 332.078px;">Activity</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Deployment: activate to sort column ascending" style="width: 97.3828px;">Deployment</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 81.6562px;">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End date: activate to sort column ascending" style="width: 72.6172px;">End date</th></tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
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
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Kamanzi Julius</td>
                                                <td>+25677323112</td>
                                                <td>Training on GBV </td>
                                                <td>Eastern Region</td>
                                                <td>2011/04/25</td>
                                                <td>011/04/25</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Sandra Awili</td>
                                                <td>+25677323112</td>
                                                <td>Training</td>
                                                <td>Eastern Region</td>
                                                <td>2011/04/25</td>
                                                <td>011/04/25</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Sandra Awili</td>
                                                <td>+25677323112</td>
                                                <td>Training on GBV</td>
                                                <td>Eastern Region</td>
                                                <td>2011/04/25</td>
                                                <td>011/04/25</td>
                                            </tr><tr role="row" class="even">
                                            <td class="sorting_1">Sandra Awili</td>
                                                <td>+25677323112</td>
                                                <td>Equiping girls with tools to support in education</td>
                                                <td>Eastern Region</td>
                                                <td>2011/04/25</td>
                                                <td>011/04/25</td>
                                            </tr></tbody>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">Full Name</th><th rowspan="1" colspan="1">Mobile</th><th rowspan="1" colspan="1">Activity</th><th rowspan="1" colspan="1">Deployment</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">End date</th></tr>
                                        </tfoot>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

 @endsection       