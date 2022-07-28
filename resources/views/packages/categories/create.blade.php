<form action="{{route('category.store')}}" id="createCategoryform" method="post" enctype="multipart/form-data" >

  @csrf

  <!-- @method('DELETE') -->

<div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
    <label class=""  for="name">Category Name</label>
  <input type="text" name="name" class="form-control" id="name">
    </div>

    <!-- <div class="form-group">
    <label class=""  for="slug">Slug</label>
  <input type="text" name="slug" class="form-control" id="slug">
    </div>
     -->
    <div class="input-group">
    <label class="input-group-addon"  for="featured_image">Featured Image</label>
  <input type="file" name="featured_image" class="form-control" id="featured_image">
    </div>
                  
            </div>
        <!-- </form> -->

      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Create Category</button>
      </div>
    </div>
  </div>
</div>

</form>