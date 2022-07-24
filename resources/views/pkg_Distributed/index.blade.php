@extends(
    'layouts.admin'
)


@section('content')

<div class="content-wrapper">
<div class="container">
    <!-- <h2>Packages Distribution</h2> -->
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Attached Cards</h4>
                                <!--<a class="btn btn-primary float-right" href="#">+ Create Agent</a>-->
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
                                                        <!-- <a class="btn btn-primary float-right" href="create_activity.php">+ Create Card</a> -->
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
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Distribution ID: activate to sort column descending" style="width: 74.7891px;">Distribution ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending" style="width: 38.8672px;">Agent ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Beneficiary: activate to sort column ascending" style="width: 100.8672px;">Beneficiary</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Card Scanned: activate to sort column ascending" style="width: 133.625px;">Card Scaned</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Card Scanned: activate to sort column ascending" style="width: 100.625px;">Delivery Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Card Scanned: activate to sort column ascending" style="width: 133.625px;">Delivery Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Card Scanned: activate to sort column ascending" style="width: 80.625px;">Action</th>
                                                <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Delivery Status: activate to sort column ascending" style="width: 54.3828px;">Delivery Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="When Delivered: activate to sort column ascending" style="width: 62.1719px;">When Delivered</th></tr> -->
                                        </thead>
                                        <tbody>
                                                                                        
                         
                                        @foreach($distribution as $distributions)                                               
                                        <tr role="row" class="odd">
                                                <td class="sorting_1">{{$distributions->distribution_id}}</td>
                                                <td>{{$distributions->agent_id}}</td>
                                                <td>{{$distributions->beneficiary}}</td>
                                                <td>{{$distributions->card_scanned}}</td>
                                                <td>{{$distributions->delivery_status == 'True' ? 'Delivered' : 'True'}}</td>
                                                <td>{{$distributions->created_at}}</td>
                                                <td> 
                                            <a class="btn btn-warning" href="impactmap.html">View</a>
                                               </td>
                                            </tr>
                                            @endforeach
                                            <!-- <tr role="row" class="even"> -->
                                                <!-- <td class="sorting_1">1051</td>
                                                <td>4624</td>
                                                <td>Ayee Marcy</td>
                                                <td>49752427498797875999</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2021-11-17</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1073</td>
                                                <td>2560</td>
                                                <td>NABWIRE MORAN</td>
                                                <td>84624798299692359342</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2021-10-13</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1097</td>
                                                <td>1507</td>
                                                <td>NAMULINDWA SERINA</td>
                                                <td>34572392383275372237</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2021-10-15</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1196</td>
                                                <td>2423</td>
                                                <td>AMUGE MARY</td>
                                                <td>27284296979997857949</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2021-09-08</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1239</td>
                                                <td>1507</td>
                                                <td>NAKINTU ZAINABU</td>
                                                <td>22338384954878947833</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2021-10-15</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1245</td>
                                                <td>2423</td>
                                                <td>Victoria Kagere</td>
                                                <td>66343325788554688546</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2022-02-13</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1249</td>
                                                <td>2423</td>
                                                <td>Mary Ndagire</td>
                                                <td>67247349497646546488</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2022-03-27</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1303</td>
                                                <td>2423</td>
                                                <td>Edith Ninsima</td>
                                                <td>69869727537375778243</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2021-11-04</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1311</td>
                                                <td>2423</td>
                                                <td>NABANJA BRIDGET</td>
                                                <td>85996562625338742226</td>
                                                <td>Delivered
                                                    </td>
                                                <td>2021-09-08</td>
                                            </tr> -->
                                        
                                        
                                        
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">Distribution ID</th><th rowspan="1" colspan="1">Agent ID</th><th rowspan="1" colspan="1">Beneficiary</th><th rowspan="1" colspan="1">Card Scanned</th><th rowspan="1" colspan="1">Delivery Status</th><th rowspan="1" colspan="1">When Delivered</th></tr>
                                        </tfoot> -->
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 226 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">23</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>

@endsection