@extends('layouts.admin')

  @section('content')

  <div class="content-wrapper">
    <div class="container">
                <div class="row">

                    <div class="col-12">
                       
                                <h3 class="card-title">Packages List</h3>
                                <!--<a class="btn btn-primary float-right" href="#">+ Create Agent</a>-->
                                <div class="table-responsive">
                                
                                    <div id="DataTables_Table_0_wrapper datatable" class="dataTables_wrapper container-fluid dt-bootstrap4">
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
                                                        </div>
                                                        <div class="col-sm-8 col-sm-6">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter" style=" padding-bottom:8px;">
                                                        <button class="btn btn-danger btn-small" onclick="createPackage()">+ Create Package</button>
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
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Distribution ID: activate to sort column descending" style="width: 30.7891px;">Pakage ID</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending"    style="width: 80.8672px;">Name</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending"    style="width: 108.8672px;">Description</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending"    style="width: 50.8672px;">Category</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending"    style="width: 50.8672px;">Quantity</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Distributed: activate to sort column ascending"    style="width: 30.8672px;">Distributed</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Available: activate to sort column ascending"    style="width: 20.8672px;">Available</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending"    style="width: 40.8672px;">Start Date</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End Date: activate to sort column ascending"    style="width: 40.8672px;">End Date</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Beneficiary: activate to sort column ascending" style="width: 140.8672px;">Action</th>

                                            </thead>
                                        <tbody>

                                     
                                    @foreach($packages as $package)
                                     
                                       
                                        <tr role="row" class="even">
                                                <td class="sorting_1"><span  id="role_id" >{{$package->id}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->name}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->description}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->category}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->quantity}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->pkg_Distributed}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->available_packages}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->start_date}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$package->end_date}}</span></td>
                                            
                                                <td>
                                                <button id="showUserdata" class="btn btn-success btn-small" value="{{$package->id }}" onclick="showPackage({{$package->id}})"  data-id="{{ $package->id }}" >Show</button>
                                                <a class="btn btn-primary float-right" href="#" onclick="editPackage({{$package->id}})">Edit</a>
                                                <a class="btn btn-danger float-right" href="#">Delete</a>
                                              </td>
                                            </tr>
                                                    
                                           
                                          @endforeach
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">Distribution ID</th><th rowspan="1" colspan="1">Agent ID</th><th rowspan="1" colspan="1">Beneficiary</th><th rowspan="1" colspan="1">Card Scanned</th><th rowspan="1" colspan="1">Delivery Status</th><th rowspan="1" colspan="1">When Delivered</th></tr>
                                        </tfoot> -->
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 226 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">23</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                          
                    </div>
                
           </div>


</div></div>

@include('packages.create')
@include('packages.show')
@include('packages.edit')
@include('packages.categories.delete')


@endsection 


@section('scripts')

<script>

function createPackage(){

$('#createPackageModal').modal('show');  
console.log('create category..');
  
 }

 function showPackage(id){
    $('#showPackageModal').modal('show');  
console.log('create Package..' + id); 
   $id = id; 
 $.ajax({
    type: 'GET',
    url: "{{url('showpackage')}}"  +'/'+ id,
    success: function(data){
 console.log('category: ', data);
       $('#packagename').val(data.packages.name);
       $('#packagedesc').val(data.packages.description);
       $('#packagecategory').val(data.packages.category);
       $('#packageqty').val(data.packages.quantity);
       $('#startdate').val(data.packages.start_date);
       $('#enddate').val(data.packages.end_date);
        
    console.log(data.packages.start_date);
    }
 })
 }


 

 function editPackage(id){
    $('#editPackageModal').modal('show');  
console.log('create category..' + id); 
   $id = id; 
 $.ajax({
    type: 'GET',
    url: "{{url('showpackage')}}"  +'/'+ id,
    success: function(data){
 console.log('category: ', data);
       $('#packagename1').val(data.packages.name);
       $('#packagedesc1').val(data.packages.description);
       $('#packagecategory1').val(data.packages.category);
       $('#packageqty1').val(data.packages.quantity);
       $('#startdate1').val(data.packages.start_date);
       $('#enddate1').val(data.packages.end_date);
       $('#packageid').val(data.packages.id);
        
        
    console.log("MODEL:" + data.data.id);
    }
 })
 }

 function deleteCategory(id){

   $("#deleteModal").modal('show');
    var form =  document.getElementById('deleteCategoryform');
    form.action = '/deletecategory/' + id;
    console.log(form);
 }

</script>



@endsection






