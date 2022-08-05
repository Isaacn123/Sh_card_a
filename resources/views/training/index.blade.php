@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container">
    <!-- <h1>Beneficiary</h1> -->
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage Trainings</h4>
                                <!--<a class="btn btn-primary float-right" href="create_beneficiary.php">+ Create Beneficiary</a>-->
                                <div class="table-responsive">
                                   
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                                    <label>Show entries:<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                     </label>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="row">
                                                        <div class=" col-sm-8 col-sm-6 text-right" style="padding-top:13px;">
                                                        <!-- addtraining -->
                                                        <!-- <a class="btn btn-primary float-right" href="{{route('beneficial.create')}}">+ Add Training</a> -->
                                                        <button class="btn btn-success btn-small" onclick="addtraining('store')">+ Add Training</button>
                                                        </div>
                                                        <div class="col-sm-8 col-sm-6">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter" style=" padding-bottom:8px;">
                                                    <label>Search:</label>
                                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                                    
                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-12">
                              <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                            <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 27.7344px;">ID</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full Name: activate to sort column descending" style="width: 92.625px;">Training ID</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full Name: activate to sort column descending" style="width: 92.625px;">Training Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Agent Age: activate to sort column ascending" style="width: 101.344px;">Start Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 101.344px;">End Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 67.9922px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($training as $trainings)

                                        <tr role="row" class="even">
                                                <td class="sorting_1">{{$trainings->id}}</td>
                                                <td class="sorting_1">{{$trainings->training_id}}</td>
                                                <td><a href="#">{{$trainings->training_name}}</a></td>
                                                <td>{{$trainings->training_start_date}}</td>
                                                <td>{{$trainings->training_end_date}}</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1526">View</a></td>
                                            </tr>

                                        @endforeach
                                                                                    
          
                         
                                        <!-- <tr role="row" class="even">
                                                <td class="sorting_1">1526</td>
                                                <td><a href="beneficiary_details.php?beneficiary_uid=1526">Rozina Gebrezgabigher</a></td>
                                                <td>26</td>
                                                <td></td>
                                                <td>256706077544</td>
                                                <td>2022-05-17</td>
                                                <td><a class="btn btn-primary" href="beneficiary_details.php?beneficiary_uid=1526">View</a></td>
                                            </tr> -->
                                        
                                        
                                        
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Address</th><th rowspan="1" colspan="1">Mobile</th><th rowspan="1" colspan="1">Created at</th><th rowspan="1" colspan="1">Action</th></tr>
                                        </tfoot> -->
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 206 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">21</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
   
</div>

<form action="" id="UploadCardform" method="post" enctype="multipart/form-data" >

  @csrf

  @method('POST')

<div class="modal fade" id="uploadCardModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Training</h5>
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
            <label for="traing_name" class="">Training Name</label>
            <input type="text" name="training_name" value="{{old('training_name')}}" placeholder=" Training Name" class="form-control">
            <span class="text-danger">@error('training_name'){{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="training_desc" class="">Training Description</label>
            <input type="text"  aria-describedby="sizing-addon1" id="training_desc" value="{{old('training_description')}}" name="training_description" placeholder=" Training Description" class="form-control input-lg">
            <span class="text-danger">@error('training_description') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="benficiary" class="">Beneficiaries</label>
            <input type="number"  aria-describedby="sizing-addon1" id="beneficiary" value="{{old('beneficiary')}}" name="beneficiary" placeholder="no of Beneficiaries" class="form-control input-lg">
            <span class="text-danger">@error('training_description') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="training_start" class="">Start Date</label>
            <input type="text" id="training_start" name="training_start_date" value="{{old('training_start_date')}}" placeholder=" Start Date" class="form-control">
            <span class="text-danger">@error('training_start_date') {{$message}} @enderror</span>
          
        </div>

          <div class="form-group">
            <label for="training_end" class="">End Date</label>
            <input type="text" id="training_end" name="training_end_date" value="{{old('training_end_date')}}" placeholder=" End Date" class="form-control">
            <span class="text-danger">@error('training_start_date'){{$message}} @enderror</span>
          </div>

                  
    </div>
        <!-- </form> -->

      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" >Add Training</button>
      </div>
    </div>
  </div>
</div>

</form>


@endsection

@section('scripts')

<script>
    //   $(function() {
    //        $('#datetimepicker').datetimepicker();
    //     });
    // function addtraining(){
    //     $('#uploadCardModal').modal('show');
    //     var form = document.getElementById('UploadCardform');
    //      form.action = '/addtraining';
    //      console.log(form)
    // }
    function addtraining(){
    $('#uploadCardModal').modal('show');
    var form = document.getElementById('UploadCardform');
    form.action = '/addtraining'; // + id; addcard
     console.log(form);
    }
</script>


@endsection