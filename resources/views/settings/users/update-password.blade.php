
<form action="{{route('updatepassword',$passwordsUpdate->id)}}" method="post">
@csrf

@method('PUT')
<div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputPassword4">Old Password</label>
                        <input type="password" value="{{old('old_password')}}" name="old_password" class="form-control @error('old_password') is-invalid @enderror" required  id="inputPassword5" />
                        <!-- <span class="text-danger">@error('old_password') {{$message}} @enderror</span>  -->
                    </div>
                    <div class="form-group">
                        <label for="inputPassword5">New Password</label>
                        <input type="password"  value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" required id="inputPassword5" />
                        <!-- <span class="text-danger">@error('password') {{$message}} @enderror</span>  -->
                    </div>
                    <div class="form-group">
                        <label for="inputPassword6">Confirm Password</label>
                        <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required  id="inputPassword6" />
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="mb-2">Password requirements</p>
                    <p class="small text-muted mb-2">To create a new password, you have to meet all of the following requirements:</p>
                    <ul class="small text-muted pl-4 mb-0">
                        <li>Minimum 8 character</li>
                        <li>At least one special character</li>
                        <li>At least one number</li>
                        <li>Can’t be the same as a previous password</li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Change</button>
</form>