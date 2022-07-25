<form action="{{route('edituser' ,$singleuser->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')
                <hr class="my-4" />
                <div class="form-row">
                    <div class="form-group"> 
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="firstname" value="{{$singleuser->firstname == null ? '' : $singleuser->firstname }}" class="form-control" placeholder="{{$singleuser->firstname == null ? 'Fist Name' : $singleuser->firstname }}" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="lastname" value="{{$singleuser->lastname == null ? '' : $singleuser->lastname}}" class="form-control" placeholder="{{$singleuser->lastname == null ? 'Last Name' : $singleuser->lastname}}" />
                    </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group"> 
                    <div class="form-group col-md-6">
                        <label for="firstname">Gender</label>
                        <input type="text" id="gender" value="{{$singleuser->gender == null ? '' : $singleuser->gender }}" name="gender" class="form-control" placeholder="{{$singleuser->gender == null ? 'Gender' : $singleuser->gender }}" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_of_birth">DateOfBirth</label>
                        <input type="text" id="date_of_birth" name="date_of_birth" value="{{$singleuser->date_of_birth == null ? '' : $singleuser->date_of_birth}}" class="form-control" placeholder="{{$singleuser->date_of_birth == null ? 'Date of Birth' : $singleuser->date_of_birth}}" />
                    </div>
                    </div>
                </div>
                <div class="form-group extra_padding">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" value="{{$singleuser->email}}" placeholder="{{$singleuser->email}}" />
                </div>
                <button type="submit" class="btn btn-primary">Save Change</button>
      </form>