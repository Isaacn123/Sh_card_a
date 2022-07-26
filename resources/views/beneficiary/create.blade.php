
@extends('layouts.admin')



@section('content')
<!-- <p class="text-center">
    Hello
</p> -->

<div class="content-wrapper">
<div class="container">
<div class="card card-default">

     

<div class="card-header">

    <!-- {{isset($category) ? 'Edit E-Shop Category' : 'Create E-Shop Category'}} -->
</div>

<div class="card-body">
{{isset($agent) ? 'Agents' : 'Create Agent'}}

@if($errors->any())

<div class="alert alert-danger">
   <div class="list-group-item">
       <ul class="list-group">

      
       @foreach($errors->all() as $error)
       <li class="list-group text-danger">{{$error}}</li> 
       @endforeach
    </ul>
   </div>
</div>

@endif

   <form action="{{route('beneficial.store')}}" method="POST" enctype="multipart/form-data" >
   <!-- @csrf -->
   @csrf

     <div class="form-group extra_padding">
         <label for="name">Beneficairy Names</label>
         <!-- {{isset($category) ? $category->name : ''}}" -->
         <input type="text" value="{{isset($beneficial) ? $beneficial->fullName : ''}}" placeholder="Agents Names" id="name" name="fullName" class="form-control">

     </div>
     <div class="form-row">
        <div class="form-group">
            <div class="form-group col-md-6">
         <label for="age">Beneficairy Age</label>
         <input type="text" id="age" placeholder="Age" value="" name="age" class="form-control">
     
            </div>

            <div class="form-group col-md-6">

         <label for="gender">Gender</label>
         <input type="text" id="gender"  placeholder="Gender" value="" name="gender" class="form-control">
     
            </div>
        </div>
     </div>
     <div class="form-group extra_padding">
         <label for="phone">Phone Number</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="phone" value=""  placeholder="Phone Number" name="phoneNumber" class="form-control">
     </div>

     <div class="form-row">
        <div class="form-group">

        <div class="form-group col-md-6">
        <label for="nationality">Nationality</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="nationality" value="" placeholder="Nationality" name="nationality" class="form-control">
    
        </div>
        <div class="form-group col-md-6">
        <label for="address">Address</label>
       
       <input type="text" id="address" value="address"  placeholder="Address" name="address" class="form-control">
 
        </div>
              </div>
            </div>
   
        <div class="form-group extra_padding">
         <label for="village">Village</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="village" value="" placeholder="Agent Village" name="village" class="form-control">
     </div>


     <div class="form-row">
        <div class="form-group">
        <div class="form-group col-md-6">
        <label for="acres">Acres</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="acres" value="" placeholder="Acres" name="acres" class="form-control">
    
        </div>

        <div class="form-group col-md-6">
        <label for="ownership"> Beneficairy Ownership</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="ownership" value="" placeholder="ownership" name="ownership" class="form-control">
    
        </div>

        </div></div>


     <div class="form-group extra_padding">
         <label for="memberships">Memberships</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="farmer" value="" placeholder="memberships" name="memberships" class="form-control">
     </div>

        <div class="form-row">
        <div class="form-group">
        <div class="form-group col-md-6">
        <label for="certifications"> Beneficairy Certifications</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="certifications" value="" placeholder="Agent Certification" name="certifications" class="form-control">
        </div>

        <div class="form-group col-md-6">
        <label for="assigned">Assigned Inspectors</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="assigned" value="" placeholder="Assigned Inspectors" name="assigned_Inspectors" class="form-control">
        </div>

        </div></div>

        
        <div class="form-group extra_padding">
         <label for="family">Family Size</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="family" value="" placeholder="Family Size" name="family_size" class="form-control">
     </div>

    <div class="form-group mt-2">
     <!-- <button  class="btn btn-success" >
       
          {{isset($category) ? 'Edit E-Shop Category' : '  Add E-Shop Category'}}
     </button> -->
     <button type="submit" class="btn btn-primary">
                                    Create Agent
                                </button>
    </div>

   </form>
</div>
</div>
</div>
</div>



@endsection