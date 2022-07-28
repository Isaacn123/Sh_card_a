<form action="{{route('package.store')}}" id="createPackageform" method="post" enctype="multipart/form-data" >

  @csrf

  @method('POST')

<div class="modal fade" id="showPackageModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Add a Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Are you sure you want to delete this Category?  {{route('card.store')}} -->
    
        <!-- @csrf    -->
     

   <div class="card-body">
    
         <!-- <div class="input-group">
                <label class="input-group-addon"  for="csv_file">CARDS </label>
                <input type="file" name="csv_file" class="form-control" id="csv_file">
          </div> -->

          <div class="form-group">
            <label for="traing_name" class="">Package Name</label>
            <input type="text" disabled id="packagename" name="packagename" value="{{old('name')}}" placeholder=" Package Name" class="form-control">
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="package_desc" class="">Package Description</label>
            <input type="text"  disabled aria-describedby="sizing-addon1" id="packagedesc" value="{{old('description')}}" name="packagedesc" placeholder=" Package Description" class="form-control input-lg">
            <span class="text-danger">@error('description') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="package_category" class="">Package Category</label>
            <input type="text" disabled  aria-describedby="sizing-addon1" id="packagecategory" value="{{old('category')}}" name="packagecategory" placeholder=" Package Category" class="form-control input-lg">
            <span class="text-danger">@error('category') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="package_qty" class="">Quantity</label>
            <input type="text"  aria-describedby="sizing-addon1" disabled id="packageqty" value="{{old('quantity')}}" name="packageqty" placeholder="Quantity" class="form-control input-lg">
            <span class="text-danger">@error('quantity') {{$message}} @enderror</span>
          </div>


          <div class="form-row">
           
          <div class="form-group">
                <div class="form-group col-md-6">
                <div class="form-group">
            <label for="package_start" class="">Start Date</label>
            <input type="text" id="startdate" name="startdate" disabled value="{{old('start_date')}}" placeholder=" Start Date" class="form-control">
            <span class="text-danger">@error('start_date') {{$message}} @enderror</span>
          
        </div>
                </div>

                <div class="form-group col-md-6">
            
          <div class="form-group">
            <label for="package_end" class="">End Date</label>
            <input type="text" id="enddate" name="enddate" disabled value="{{old('end_date')}}" placeholder=" End Date" class="form-control">
            <span class="text-danger">@error('end_date'){{$message}} @enderror</span>
          </div>
                </div>
            </div>
          </div>

                  
    </div>
        <!-- </form> -->
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <!-- <button type="submit" class="btn btn-primary" >Add Packages</button> -->
      </div>
    </div>
  </div>
</div>

</form>
