<form action="{{route('package.store')}}" id="createPackageform" method="post" enctype="multipart/form-data" >

  @csrf

  @method('POST')

<div class="modal fade" id="createPackageModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
            <input type="text" name="name" value="{{old('name')}}" placeholder=" Package Name" class="form-control">
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="package_desc" class="">Description</label>
            <input type="text"  aria-describedby="sizing-addon1" id="package_desc" value="{{old('description')}}" name="description" placeholder=" Package Description" class="form-control input-lg">
            <span class="text-danger">@error('description') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="package_category" class="">Category</label>
            <!-- <input type="text"  aria-describedby="sizing-addon1" id="package_category" value="{{old('category')}}" name="category" placeholder=" Package Category" class="form-control input-lg"> -->
            <div class="select-form">
              <select name='category' id="category" class="form-control">
                 @foreach($categories as $category)
                  <option value="{{$category->name}}">{{$category->name}}</option>
                 @endforeach
              </select>
            </div>
            <span class="text-danger">@error('category') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="package_qty" class="">Quantity</label>
            <input type="text"  aria-describedby="sizing-addon1" id="package_qty" value="{{old('quantity')}}" name="quantity" placeholder="Quantity" class="form-control input-lg">
            <span class="text-danger">@error('quantity') {{$message}} @enderror</span>
          </div>


          <div class="form-group">
            <label for="package_start" class="">Start Date</label>

            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="datepicker" name="start_date" value="{{old('start_date')}}" class="form-control pull-right" placeholder=" Start Date">
                </div>


            <!-- <input type="text" id="package_start" name="start_date" value="{{old('start_date')}}" placeholder=" Start Date" class="form-control"> -->
            <span class="text-danger">@error('start_date') {{$message}} @enderror</span>
          
        </div>

          <div class="form-group">
            <label for="package_end" class="">End Date</label>

            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="package_end" name="end_date" value="{{old('end_date')}}" class="form-control pull-right" placeholder=" End Date">
                </div>

            <!-- <input type="text" id="package_end" name="end_date" value="{{old('end_date')}}" placeholder=" End Date" class="form-control"> -->
            <span class="text-danger">@error('end_date'){{$message}} @enderror</span>
          </div>

                  
    </div>
        <!-- </form> -->
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" >Add Packages</button>
      </div>
    </div>
  </div>
</div>

</form>



