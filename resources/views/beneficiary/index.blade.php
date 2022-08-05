@extends('layouts.admin')
@section('content')
    

    <div class="content-wrapper">
    <div class="container">
    <!-- <h1>Beneficiary</h1> -->
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Beneficiaries</h4>
                                <!--<a class="btn btn-primary float-right" href="create_beneficiary.php">+ Create Beneficiary</a>-->
                                <div class="table-responsive">
                                    <!-- <a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a><a href=""></a> -->
                                    
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
                                                        <a class="btn btn-primary float-right" href="{{route('beneficial.create')}}">+ Create Beneficiary</a>
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
                                        <!-- <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 27.7344px;">ID</th> -->
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full Name: activate to sort column descending" style="width: 92.625px;">UID</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full Name: activate to sort column descending" style="width: 92.625px;">Full Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent Age: activate to sort column ascending" style="width: 101.344px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 101.344px;">Gender</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 101.344px;">Mobile</th> -->
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 332.078px;">Address</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nationality: activate to sort column ascending" style="width: 332.078px;">Nationality</th> -->
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Village: activate to sort column ascending" style="width: 332.078px;">Village</th> -->
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Acres: activate to sort column ascending" style="width: 332.078px;">Acres</th> -->
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ownershipr: activate to sort column ascending" style="width: 97.3828px;">Ownership</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Memberships: activate to sort column ascending" style="width: 97.3828px;">Memberships</th> -->
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Family Size: activate to sort column ascending" style="width: 252.328px;">Family Size</th> -->
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assigned Inspectors: activate to sort column ascending" style="width: 42.9375px;">Assigned Inspectors</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Certifications: activate to sort column ascending" style="width: 140.602px;">Certifications</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created at: activate to sort column ascending" style="width: 94.6328px;">Created at</th> -->
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 67.9922px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                                                    
                                          @foreach($beneficial as $beneficiaries)   

                                             <tr role="row" class="odd">
                                        <!-- <td class="sorting_1">{{$beneficiaries->id}}</td> -->
                                        <td class="sorting_1">{{$beneficiaries->beneficiary_uid}}</td>
                                        <td class="sorting_1">{{$beneficiaries->fullName}}</td>
                                        <td>{{$beneficiaries->age}}</td>
                                        <td>{{$beneficiaries->gender}}</td>
                                        <!-- <td>{{$beneficiaries->phoneNumber}}</td> -->
                                        <td>{{$beneficiaries->address}}</td>
                                        <!-- <td>{{$beneficiaries->nationality}}</td> -->
                                        <!-- <td>{{$beneficiaries->village}}</td> -->
                                        <!-- <td>{{$beneficiaries->acres}}</td> -->
                                        <!-- <td>{{$beneficiaries->ownership}}</td> -->
                                        <!-- <td>{{$beneficiaries->family_size}}</td> -->
                                        <td>{{$beneficiaries->assigned_Inspectors}}</td>
                                        <td>{{$beneficiaries->certifications}}</td>



                                            </tr>
                                             




                                             @endforeach
                   
                         
                         
                         
                         
                         
                         
                                        <!-- <tr role="row" class="odd">
                                                <td class="sorting_1">1016</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1016">Mugisha flora</a></td>
                                                <td>29</td>
                                                <td></td>
                                                <td>256708969231</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1016">View</a></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1048</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1048">Jackline Malelinda</a></td>
                                                <td>18</td>
                                                <td></td>
                                                <td>256740069133</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1048">View</a></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1081</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1081">Lemlem Tekie Gebregergsh</a></td>
                                                <td>28</td>
                                                <td></td>
                                                <td>256758427481</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1081">View</a></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1315</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1315">Faida Muderwa</a></td>
                                                <td>18</td>
                                                <td></td>
                                                <td>256781017693</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1315">View</a></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1336</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1336">Furaha Kahindo</a></td>
                                                <td></td>
                                                <td></td>
                                                <td>256759826785</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1336">View</a></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1365</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1365">Mulashi Katubweb Elvine</a></td>
                                                <td></td>
                                                <td>Nsambya Kevina</td>
                                                <td>256781981016</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1365">View</a></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1385</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1385">Irenge Rutagayingabo Franck</a></td>
                                                <td>30</td>
                                                <td>Munyonyo</td>
                                                <td>2560776025736</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1385">View</a></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1464</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1464">Nabuyenya Annet</a></td>
                                                <td>19</td>
                                                <td></td>
                                                <td>256753596048</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1464">View</a></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">1524</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1524">Clarisse kibunga</a></td>
                                                <td></td>
                                                <td></td>
                                                <td>25677567673</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1524">View</a></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">1526</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1526">Rozina Gebrezgabigher</a></td>
                                                <td>26</td>
                                                <td></td>
                                                <td>256706077544</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1526">View</a></td>
                                            </tr> -->
                                        
                                        
                                        
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Address</th><th rowspan="1" colspan="1">Mobile</th><th rowspan="1" colspan="1">Created at</th><th rowspan="1" colspan="1">Action</th></tr>
                                        </tfoot> -->
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 206 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">21</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
   
</div>



@endsection