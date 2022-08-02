<form action="" id="editUserform" method="post" enctype="multipart/form-data" >

@csrf

@method('PUT')      

<input type="hidden" id="user_id_st" name="user_id_st"  class="form-control" />

<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="deleteModalLabel">EDIT User</h5>
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
                        <input type="text" id="first_name_st"  name="first_name_st"  class="form-control" placeholder="Fist Name" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="last_name_st"  name="last_name_st"  class="form-control" placeholder="lastname" />
                    </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group"> 
                    <div class="form-group col-md-6">
                        <label for="firstname">Gender</label>
                        <input type="text" id="gender_st_st"  name="gender_st_st" class="form-control" placeholder="gender" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_of_birth">DateOfBirth</label>
                        <input type="text" id="date_of_birth_st_st" name="date_of_birth_st_st"  class="form-control" placeholder="Date of Birth " />
                    </div>
                    </div>
                </div>
                <div class="form-group extra_padding">
                    <label for="inputEmail4">Company</label>
                    <input type="text" name="company_st" disabled class="form-control" id="company_st"   placeholder="" />
                </div>
                <div class="form-group extra_padding">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email_st_st" disabled class="form-control" id="email_st_st"   placeholder="" />
                </div>
                <div class="form-row">
                    <div class="form-group"> 
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Role</label>
                    <input type="text" name="role_st_st" disabled class="form-control" id="role_st_st"   placeholder="" />
                      </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Change</label>
                        <select name="role_st" class="form-control" id="">
                        <option >Choose Role</option>
                            @foreach($roles as $role)
                         <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        <!-- <input type="text" id="last_name_st"  name="last_name_st"  class="form-control" placeholder="lastname" /> -->
                    </div>
                    </div>
                </div>




                                
    </div>
      <!-- </form> -->

    </div>
    <div class="modal-footer">
      <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      <button type="submit" id="update_data" class="btn btn-primary">Update User</button>
    </div>
  </div>
</div>


</div>

</form>