
<div class="row">
                    <div class="col-12">
                       
                                <h3 class="card-title">User Managment</h3>
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
                                                        <button class="btn btn-danger btn-small" onclick="">+ Create New User</button>
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
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Distribution ID: activate to sort column descending" style="width: 30.7891px;">User ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending" style="width: 148.8672px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending" style="width: 128.8672px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent ID: activate to sort column ascending" style="width: 128.8672px;">Role</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Beneficiary: activate to sort column ascending" style="width: 91.8672px;">Action</th>

                                            </thead>
                                        <tbody>

                                     
                                    @foreach($users as $user)
                                     
                                       
                                        <tr role="row" class="even">
                                                <td class="sorting_1"><span  id="role_id" >{{$user->id}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$user->name}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$user->email}}</span></td>
                                                <td id="role_name"><span  id="role_name" >{{$user->role}}</span></td>
                                                <td>
                                                <!-- <a class="btn btn-success float-right" href="#">Show</a> -- -->
                                                <button value="{{$user}}" class="btn btn-success btn-small edit" onclick="show()">Show</button>
                                                <a class="btn btn-primary float-right" href="#">Edit</a>
                                                <a class="btn btn-danger float-right" href="#">Delete</a>
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



<form action="" id="UploadCardform" method="post" enctype="multipart/form-data" >

@csrf

<!-- @method('DELETE') -->

<div class="modal fade" id="uploadCardModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="deleteModalLabel">Upload Cards</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

      <div class="card-body">
  
  <div class="form-group">
  <label class=""  for="role_id">Role ID</label>
<input type="text" id="role_id" name="role_id"  disabled class="form-control">
  </div>

  <div class="form-group">
  <label class=""  for="role_name">Role Name</label>
<input type="text" name="role_name" class="form-control" id="role_name">
  </div>
                
          </div>

    </div>
    <div class="modal-footer">
      <button type="button"  class="btn btn-secondary" data-dismiss="modal">Go Back</button>
      <button type="submit" class="btn btn-primary">Done</button>
    </div>
  </div>
</div>
</div>

</form>




@section('scripts')

<script type="text/javascript">
function show(){
         
    $(document).ready(function(){

     $(document).on('click','.edit',function(){
         var data = $(this).val();
         const obj = JSON.parse(data);
         var role_id = obj.id;
        var role_name = obj.name;

     $('#role_name').val(role_name);

     $('#uploadCardModal').modal('show');
    console.log(`DATA :: ${role_name}`);
    var form = document.getElementById('UploadCardform');
    form.action = '/roles'; // + id; addcard
     console.log(form);
        });

   
    })

   
    }
</script>

@endsection


