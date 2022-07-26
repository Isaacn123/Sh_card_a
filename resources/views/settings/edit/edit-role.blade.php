<form action="{{ url('updaterole') }}" id="editRolesform" method="post" enctype="multipart/form-data" >

@csrf

@method('PUT')

<input  name="roleid" value="" type="hidden" class="form-control" id="roleid">

<div class="modal fade" id="editRolesModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
     
                    <label class="input-group-addon"  for="roleid">Role ID </label>
                    <input  name="roleid" value="" disabled class="form-control" id="roleid">
                </div>

                <div class="form-group">
                    <label class="input-group-addon"  for="rolename">Role Name</label>
                    <input type="text" name="rolename"  value="" class="form-control" id="rolename">
                </div>
                                
    </div>
      <!-- </form> -->

    </div>
    <div class="modal-footer">
      <button type="button"  class="btn btn-secondary" data-dismiss="modal">Go Back</button>
      <button type="submit" class="btn btn-primary">update</button>
    </div>
  </div>
</div>


</div>

</form>