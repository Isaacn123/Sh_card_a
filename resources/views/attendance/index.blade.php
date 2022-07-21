@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <!-- <h1>Attendance Page</h1> -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Activity Attendance </h4>
                                <!--<a class="btn btn-primary float-right" href="#">+ Create Agent</a>-->
                                <div class="table-responsive">
                                
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div>
                                         <!-- Helo -->
                                         <div class="container-fluid">
                                         <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
                                            <div class="dataTables_length" style="padding:13px 0;"  id="DataTables_Table_0_length">
                                        <label>Show entries:  
                                        <select name="DataTables_Table_0_length" id="ex2"  aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option></select>
                                            </label>
                                          </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
                                                <!-- One of three columns  to be added some Data-->
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
                                                <!-- One of three columns -->
                                                <div id="DataTables_Table_0_filter" style="padding:10px 0;" class="dataTables_filter">
                                              <label>Search:</label>
                                             <input type="search" class="form-control form-control-sm" style="padding:10px 0;" id="inputdefault" placeholder="" aria-controls="DataTables_Table_0">
                                              </div></div></div>
                                                </div>
                                            </div>
                                           </div>
                                          
                                           
                                        </div>
                                    
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Attendace ID: activate to sort column descending" style="width: 73.7891px;">Attendace ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending" style="width: 54.2969px;">Agent ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Training: activate to sort column ascending" style="width: 158.688px;">Training</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Card Scanned: activate to sort column ascending" style="width: 118.906px;">Card Scanned</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="When Attended: activate to sort column ascending" style="width: 79.4219px;">When Attended</th></tr>
                                        </thead>
                                        <tbody>
                                                                                        
                                        
                                                                                       
                                        <tr role="row" class="odd">
                                                <td class="sorting_1">1096</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>cosy test</td>
                                                <td>2022-05-25</td>
                                                
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1283</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>YONAS TAKELE</td>
                                                <td>2022-05-31</td>
                                                
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1294</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>Nahayo Hassan</td>
                                                <td>2022-05-25</td>
                                                
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1308</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>David Mwamba</td>
                                                <td>2022-06-08</td>
                                                
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1471</td>
                                                <td>Sandra Awiliiii</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>Mufano Mazidor</td>
                                                <td>2022-05-25</td>
                                                
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1557</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>Roble muhumed farah</td>
                                                <td>2022-06-08</td>
                                                
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1559</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>Dieumerci Kambale Kayange</td>
                                                <td>2022-05-31</td>
                                                
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1668</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>David sengi miracle</td>
                                                <td>2022-06-08</td>
                                                
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1707</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>David Mawa Charles</td>
                                                <td>2022-05-31</td>
                                                
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1749</td>
                                                <td>Heshima Betty</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>Engwau Emmanuel</td>
                                                <td>2022-05-31</td>
                                                
                                            </tr></tbody>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">Attendace ID</th><th rowspan="1" colspan="1">Agent ID</th><th rowspan="1" colspan="1">Training</th><th rowspan="1" colspan="1">Card Scanned</th><th rowspan="1" colspan="1">When Attended</th></tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                                    
                                    <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 79 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">8</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
@endsection