<form action="" id="showUserform" method="post" enctype="multipart/form-data" >

@csrf

<!-- @method('DELETE') -->                               

<div class="modal fade" id="showUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="deleteModalLabel">Single User</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
 
      <div class="card-body">

  
      <hr class="my-4" />
                <div class="form-row">
                    <div class="form-group"> 
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="first_name" disabled name="first_name"  class="form-control" placeholder="Fist Name" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="last_name" disabled name="last_name"  class="form-control" placeholder="lastname" />
                    </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group"> 
                    <div class="form-group col-md-6">
                        <label for="firstname">Gender</label>
                        <input type="text" id="gender_st" disabled  name="gender_st" class="form-control" placeholder="gender" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_of_birth">DateOfBirth</label>
                        <input type="text" id="date_of_birth_st" disabled name="date_of_birth_st"  class="form-control" placeholder="Date of Birth " />
                    </div>
                    </div>
                </div>
                <div class="form-group extra_padding">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email_st" disabled class="form-control" id="email_st"   placeholder="" />
                </div>
                <div class="form-group extra_padding">
                    <label for="inputEmail4">Role</label>
                    <input type="text" name="role_st" disabled class="form-control" id="role_st"   placeholder="" />
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