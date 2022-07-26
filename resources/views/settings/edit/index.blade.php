

<div class="row">
                    <div class="col-12">
                       
                                <h3 class="card-title">Role Management</h3>
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
                                                        <!-- <a class="btn btn-primary float-right" href="create_activity.php">+ Create Card</a> -->
                                                        <!-- <button class="btn btn-danger btn-small" onclick="uploadCards('store')">+ Create Card</button> -->
                                                        </div>
                                                        <div class="col-sm-8 col-sm-6">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter" style=" padding-bottom:8px;">
                                                        <button  id="createRoles"class="btn btn-danger btn-small" onclick="createModel()">+ Create New Role</button>
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
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Distribution ID: activate to sort column descending" style="width: 30.7891px;">ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending" style="width: 148.8672px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Beneficiary: activate to sort column ascending" style="width: 41.8672px;">Action</th>
                                            <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Delivery Status: activate to sort column ascending" style="width: 54.3828px;">Delivery Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="When Delivered: activate to sort column ascending" style="width: 62.1719px;">When Delivered</th></tr> -->
                                        </thead>
                                        <tbody>

                                        @foreach($roles as $role)

                                        <tr role="row" class="even">
                                                <td class="sorting_1"><span  id="role_id" >{{$role->id}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$role->name}}</span></td>
                                                <td>
        
                                                <button id="editCompany" class="btn btn-success btn-small" value="{{ $role->id }}" data-id="{{ $role->id }}" onclick="showroles({{$role->id}})">Show</button>
                                                <button id="editrole" class="btn btn-primary btn-small" value="{{ $role->id }}"  onclick="editroles({{$role->id}})">Edit</button>
                                                <button id="deleterole" class="btn btn-danger btn-small" value="{{ $role->id }}"  onclick="deleteModel({{$role->id}})">Delete</button>

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



<!-- <div class="modal fade" id="practice_modal">
                        <div class="modal-dialog">
                           <form id="companydata">

                           <input type="hidden=" name="role_id" id="role_id" value="">
                    
                                <div class="modal-content">
                                <input type="hidden" id="color_id" name="color_id" value="">
                                <div class="modal-body">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                                <input type="submit" value="Submit" id="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">
                            </div>
                         
                           </form>
                        </div>
                    </div> -->



      @include('settings.edit.roles')
      @include('settings.edit.edit-role')
      @include('settings.edit.delete-role')
      @include('settings.edit.create-role')



@section('scripts')
<script>
// practice_modal
  function showroles(id){
    $('body').on('click','#editCompany',function(){
     $('#showRolesModal').modal('show');
      var dataid = $(this).val();
     $.ajax({
      type:'GET',
      url: "/edit-role/" + dataid, 
      success:function(data){
          console.log(data.result);
          $('#id').val(data.result.id);
          $('#name').val(data.result.name);
      }
     });
    });
    
   }


   function editroles(id){
  
  $('body').on('click','#editrole',function(){
   $('#editRolesModal').modal('show');
    var dataid = $(this).val();
   $.ajax({
    type:'GET',
    url: "/edit-role/" + id, 
    success:function(data){
        console.log("MODEL EDIT" + data.result.id);
        $('#roleid').val(data.result.id);
        $('#rolename').val(data.result.name);
    }
   });
  });
  
 }

 function deleteModel(id){

$('#deleteModal').modal('show');
var form =  document.getElementById('deleteRoleform');
form.action = '/deleterole/' + id;

console.log(form);

}



function createModel(id){

$('#createModal').modal('show');
var form =  document.getElementById('deleteRoleform');
form.action = '/deleterole/' + id;

console.log(form);

}


  
</script>

@endsection 


