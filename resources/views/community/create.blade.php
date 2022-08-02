
@extends('layouts.admin')



@section('content')
<!-- <p class="text-center">
    Hello
</p> -->

<div class="content-wrapper">
<div class="container">
<div class="card card-default">

     

<div class="card-header">
{{isset($agent) ? 'Agents' : 'Create Agent'}}
    <!-- {{isset($category) ? 'Edit E-Shop Category' : 'Create E-Shop Category'}} -->
</div>

<div class="card-body">

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

   <form action="{{route('agent.store')}}" method="POST" enctype="multipart/form-data" >
   <!-- @csrf -->
   @csrf

     <div class="form-group extra_padding">
         <label for="name">Agent Names</label>
         <!-- {{isset($category) ? $category->name : ''}}" -->
         <input type="text" value="{{isset($agent) ? $agent->fullName : ''}}" placeholder="Agents Names" id="name" name="fullName" class="form-control">

     </div>


     <div class="form-row">
        <div class="form-group">

        <div class="form-group col-md-6">
        <label for="agent_id">Agent ID</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="agent_id" value="{{substr(uniqid(rand(), true), 4, 4)}}" {{ 'agent_id' ? '' : 'disabled' }} name="agent_id" class="form-control">
    
        </div>
        <div class="form-group col-md-6">
        <label for="agent_pin">Agent PIN</label>
       
       <input type="text" id="agent_pin" value="{{substr(uniqid(rand(), true), 4, 4)}}" {{ 'agent_pin' ? '' : 'disabled' }} name="agent_pin" class="form-control">
 
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
         <label for="age">Agent Age</label>
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
         <span class="text-danger">@error('phoneNumber'){{$message}} @enderror</span>
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
        <label for="assigned">Assigned Assets</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="assigned" value="" placeholder="Assetes Given" name="assigned_assets" class="form-control">
    
        </div>

        <div class="form-group col-md-6">
        <label for="certifications"> Agent Certifications</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="certifications" value="" placeholder="Agent Certification" name="certifications" class="form-control">
    
        </div>

        </div></div>


     <div class="form-group extra_padding">
         <label for="farmer">Assigned Farmer</label>
         <!-- {{isset($category) ? $category->slug : ''}} -->
         <input type="text" id="farmer" value="" placeholder="Assigned Farmer" name="assigned_farmer" class="form-control">
     </div>

     <div class="form-group extra_padding">
         <label for="">Agent Profile (Optinal)</label>
      <label class="input-group-addon"  for="profile_file">PROFILE PICTURE</label>
     <input type="file" name="profile_file" class="form-control" id="profile_file">
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