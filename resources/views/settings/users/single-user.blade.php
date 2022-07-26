<form action="" id="showUserform" method="post" enctype="multipart/form-data" >

@csrf

<!-- @method('DELETE') -->                               

<div class="modal fade" id="showUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
     
                    <label class="input-group-addon"  for="role_id">User ID </label>
                    <input  name="id" value="" disabled class="form-control" id="id">
                </div>

                <div class="form-group">
                    <label class="input-group-addon"  for="role_name">User Name</label>
                    <input type="text" name="name" disabled value="" class="form-control" id="name">
                </div>
                                
    </div>
      <!-- </form> -->

    </div>
    <div class="modal-footer">
      <button type="button"  class="btn btn-secondary" data-dismiss="modal">Go Back</button>
      <button data-dismiss="modal" class="btn btn-primary">Done</button>
    </div>
  </div>
</div>


</div>

</form>