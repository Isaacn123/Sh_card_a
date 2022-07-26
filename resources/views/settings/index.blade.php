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
                
                @include('settings.users.update-password')
             
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
       
             @include('settings.users.create-user')
    
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
<button onclick="myfunction()">Edit</button>
<script>
    function myfunction(){

    }
    function getuser(){
        console.log('user')
    }
</script>

@endsection
<!-- @section('scripts') -->

<!-- <script type="text/javascript">
function show(){
    $('#uploadCardModal').modal('show');
    var form = document.getElementById('UploadCardform');
    form.action = '/addTraining'; // + id; addcard
     console.log(form);
    }
</script> -->

<!-- @endsection -->