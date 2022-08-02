


 <form action=""  method="post" enctype="multipart/form-data">
    @csrf 

    @method('PUT')
           
             <div class="form-group extra_padding">
                    <label for="company_name">Company Name</label>
                 <input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" name="name"  class="form-control" value="{{$companies->name == null ? '' : $companies->name}}" id="company_name" placeholder="{{$companies->name == null ? 'Company Name' :  '' }}" />
                 
            </div>

     <div class="form-group extra_padding">
     <label for="company_about">About</label>
     <textarea {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" name="about" col="10" rows="5" value="{{$companies->about == null ? '' : $companies->about}}"  class="form-control" id="company_about" placeholder="{{$companies->about== null ? 'short description' : ''}}" > </textarea>
 </div>



 <div class="form-row">
 <div class="form-group col-md-6">
 <label for="company_email">Email</label>
<input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" name="email" value="{{$companies->email == null ? '' : $companies->email}}"  class="form-control" id="company_email" placeholder="{{$companies->email == null ? 'example@example.com' : ''}}" />
 
</div>
<div class="form-group col-md-6">
                        <label for="company_website">website</label>
                        <input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" name="website" value="{{$companies->website == null ? '' : $companies->website}}"  class="form-control" id="company_website" placeholder="{{$companies->website == null ? 'Company Website' : ''}}"/>
                    </div>
</div>

                <div class="form-row">
                     <div class="form-group col-md-4">
                    <label for="country">Country</label>
                    <input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" name="country" value="{{$companies->country == null ? '' : $companies->country}}"  class="form-control" id="country" placeholder="Country" />
                    </div>
                    <div class="form-group col-md-2">
                        <label for="zipcode">Zip</label>
                        <input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" class="form-control" value="{{$companies->zipcode == null ? '' : $companies->zipcode}}" name="zipcode" id="zipcode" placeholder="{ 256 }" />
                    </div>
                </div>

                <div class="form-row">
                     <div class="form-group col-md-6">
                    <label for="company_address">Address</label>
                    <input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" name="company_address" value="{{$companies->company_address == null ? '' : $companies->company_address}}"  class="form-control" id="company_address" placeholder=" Address" />
                    </div>

                     <div class="form-group col-md-6">
                        <label for="company_phone">Phone Number</label>
                        <input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" value="{{$companies->company_phone == null ? '' : $companies->company_phone}}" class="form-control" name="company_phone" id="company_phone" placeholder=" Phone Number" />
                    </div>
                </div>

               
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input {{auth()->user()->hasRole('user') ? 'disabled' : ''}} type="text" name="city" value="{{$companies->city == null ? '' : $companies->city}}"  class="form-control" id="city" placeholder=" City" />
                    </div>
                   
                   
                </div>


                <div class="form-row extra_padding">
                <div class="form-group">
                    @role('user')
                    <button- type="submit" class="btn btn-primary" disabled=="disabled" hidden>Save Change</button>
                    @else
                    <button- type="submit" class="btn btn-primary">Save Change</button>
                    @endrole
               
                </div>

</div>


              
             
           </form>