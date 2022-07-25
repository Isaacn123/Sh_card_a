<form action="{{route('edituser' ,$singleuser->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')
                <hr class="my-4" />
                <div class="form-row">
                    <div class="form-group"> 
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="firstname" value="{{$singleuser->name}}" class="form-control" placeholder="{{$singleuser->name}}" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="enter Last Name" />
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" value="{{$singleuser->email}}" placeholder="{{$singleuser->email}}" />
                </div>
                <button type="submit" class="btn btn-primary">Save Change</button>
      </form>