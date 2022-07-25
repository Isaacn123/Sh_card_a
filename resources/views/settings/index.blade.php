@extends(
    'layouts.admin'
)

@section('content')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div class="content-wrapper">

<div class="container">
<div id="accordion">

 <ul class="list-group">


    <div class="card">
        <div class="card-header" id="headingTwo2">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
            Edit Roles
            </button>
            </h5>
        </div>
            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion">
            <div class="card-body">
           
          @include('settings.edit.index')


           </div>
        </div>
   </div>


        <div class="card">
            <div class="card-header" id="headingThree3">
                <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                    Change Password
                </button>
                </h5>
            </div>
            <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion">
                <div class="card-body">
                <hr class="my-4" />
                <form action="" method="post">

                <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword4">Old Password</label>
                                        <input type="password" class="form-control" id="inputPassword5" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword5">New Password</label>
                                        <input type="password" class="form-control" id="inputPassword5" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword6">Confirm Password</label>
                                        <input type="password" class="form-control" id="inputPassword6" />
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
                
                        
                        
                
                </div>
            </div>
        </div>

     <div class="card">
        <div class="card-header" id="headingThree4">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                Create a new User
            </button>
            </h5>
        </div>
        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion">
            <div class="card-body">
       
            <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
          </div>
         </div>
        </div>


    <div class="card">
        <div class="card-header" id="headingThree5">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                Company Information
            </button>
            </h5>
        </div>
        <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordion">
            <div class="card-body">
           <form>
           <div class="form-group extra_padding">
                    <label for="inputAddress5">Address</label>
                    <input type="text" class="form-control" id="inputAddress5" placeholder="P.O. Box 464, 5975 Eget Avenue" />
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCompany5">Company</label>
                        <input type="text" class="form-control" id="inputCompany5" placeholder="Nec Urna Suscipit Ltd" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState5">State</label>
                        <select id="inputState5" class="form-control">
                            <option selected="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip5">Zip</label>
                        <input type="text" class="form-control" id="inputZip5" placeholder="98232" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save Change</button>
           </form>
       
        </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree6">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                Edit User Information
            </button>
            </h5>
        </div>
        <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6" data-parent="#accordion">
            <div class="card-body">

         @include('settings.users.edit')
         
         </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree7">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                List All Users
            </button>
            </h5>
        </div>
        <div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordion">
            <div class="card-body">

       @include('settings.users.index')
         </div>
        </div>
    </div>

 
</ul>
 
 
</div>
</div>



    <!-- <h2>Account Settings</h2> -->

</div>





@endsection



@section('scripts')

<script type="text/javascript">
function show(){
    $('#uploadCardModal').modal('show');
    var form = document.getElementById('UploadCardform');
    form.action = '/addTraining'; // + id; addcard
     console.log(form);
    }
</script>

@endsection