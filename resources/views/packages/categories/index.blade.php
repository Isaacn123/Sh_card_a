@extends('layouts.admin')

  @section('content')

  <div class="content-wrapper">
    <div class="container">
                <div class="row">

                    <div class="col-12">
                       
                                <h3 class="card-title">List Categories</h3>
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
                                                        <button class="btn btn-danger btn-small" onclick="createCategory()">+ Create Category</button>
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
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Distribution ID: activate to sort column descending" style="width: 30.7891px;">Category ID</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending"    style="width: 118.8672px;">Name</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending"    style="width: 108.8672px;">slug</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending"    style="width: 80.8672px;">image</th>
                                                <th class="sorting"     tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Beneficiary: activate to sort column ascending" style="width: 100.8672px;">Action</th>

                                            </thead>
                                        <tbody>

                                     
                                    @foreach($categories as $category)
                                     
                                       
                                        <tr role="row" class="even">
                                                <td class="sorting_1"><span  id="role_id" >{{$category->id}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$category->name}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$category->slug}}</span></td>
                                                <td id="role_name"><span  id="role_name" ></span></td>
                                                <td>
                                                <button id="showUserdata" class="btn btn-success btn-small" value="{{ $category->id }}" onclick="showCategory({{$category->id}})"  data-id="{{ $category->id }}" >Show</button>
                                                <a class="btn btn-primary float-right" href="#" onclick="editCategory({{$category->id}})">Edit</a>
                                                <a class="btn btn-danger float-right" href="#" onclick="deleteCategory({{$category->id}})">Delete</a>
                                              </td>
                                            </tr>
                                                    
                                           
                                          @endforeach
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">Distribution ID</th><th rowspan="1" colspan="1">Agent ID</th><th rowspan="1" colspan="1">Beneficiary</th><th rowspan="1" colspan="1">Card Scanned</th><th rowspan="1" colspan="1">Delivery Status</th><th rowspan="1" colspan="1">When Delivered</th></tr>
                                        </tfoot> -->
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 226 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">23</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                          
                    </div>
                
           </div>


</div></div>

@include('packages.categories.create')
@include('packages.categories.show')
@include('packages.categories.edit')
@include('packages.categories.delete')


@endsection 


@section('scripts')

<script>

function createCategory(){

$('#createCategoryModal').modal('show');  
console.log('create category..');
  
 }

 function showCategory(id){
    $('#showCategoryModal').modal('show');  
console.log('create category..' + id); 
   $id = id; 
 $.ajax({
    type: 'GET',
    url: "{{url('showcategory')}}"  +'/'+ id,
    success: function(data){
 console.log('category: ', data);
       $('#catname').val(data.data.name);
       $('#catslug').val(data.data.slug);
        
    console.log(data.data.name);
    }
 })
 }


 

 function editCategory(id){
    $('#editCategoryModal').modal('show');  
console.log('create category..' + id); 
   $id = id; 
 $.ajax({
    type: 'GET',
    url: "{{url('showcategory')}}"  +'/'+ id,
    success: function(data){
 console.log('category: ', data);
       $('#catname1').val(data.data.name);
       $('#catslug1').val(data.data.slug);
       $('#catid').val(data.data.id);
        
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






