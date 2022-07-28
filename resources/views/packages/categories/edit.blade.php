<form action="{{url('categoryupdate')}}" id="createCategoryform" method="post" enctype="multipart/form-data" >

  @csrf

  @method('PUT')

  <input type="hidden" name="catid" class="form-control" id="catid">

<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Add a Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Are you sure you want to delete this Category?  {{route('card.store')}} -->
    
        <!-- @csrf    -->
     

        <div class="card-body">
    <div class="form-group">
    <label class=""  for="catname1">Category Name</label>
  <input type="text" name="name" class="form-control" id="catname1">
    </div>

    <div class="form-group">
    <label class=""  for="catslug">Slug</label>
  <input type="text" name="catslug1" class="form-control" id="catslug1">
    </div>
    
    <div class="input-group">
    <label class="input-group-addon"  for="featured_image">Featured Image</label>
  <input type="text" disabled name="featured_image" class="form-control" id="featured_image">
    </div>
                  
            </div>
        <!-- </form> -->

      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Create</button>
      </div>
    </div>
  </div>
</div>

</form>