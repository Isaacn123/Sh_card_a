@extends('layouts.admin')

@section('content')


<div class="content-wrapper">
  <div class="container container_width">
  <div class="card-body">

<div class="row">
<div class="col-lg-12">
  <div class="card bg-primary text-white">
      <div class="card-body">
          <h3><b>Response</b></h3>
      </div>
  </div>
</div>
</div>
<hr class="border-dark">


  <?php 
  //  include "./forms/".$form->form_code.".html"; 
     ?>


  <!-- <div class="container pt-4"> -->
        <?php 
        include "./forms/".$form->form_code.".html"; 
        //include './forms/'.$code.'.html';
        ?>
        <div class="w-100 d-flex justify-content-center">
            <button class="btn btn-primary" form="form-data" id="">Sumbit</button>
        </div>
    <!-- </div> -->

                          
</div>
  </div>
</div>


@endsection

@section('scripts')

<script>

  $(function(){
  var button1 = document.getElementById('add_q-item');
  var button2 = document.getElementById('save_form');
  var btn = document.getElementsByClassName('rem-q-item');
  var btn2 = document.getElementsByClassName('add_radio');
  var btn3 =  document.getElementsByClassName('rem-on-display');
  var btn4= document.getElementsByClassName('req-item');
  var btn5 = document.getElementsByClassName('choice-option');
  var btn6 = document.getElementsByClassName('add_chk');
  // let input = document.querySelector("form-title").disabled = true;
  // let input2 = document.getElementById("form-description").disabled = true;


  var editable_elements = document.querySelectorAll("[contenteditable=true]");
  //    for(var i=0; i<editable_elements.length; i++)
  //    editable_elements[i].setAttribute("contenteditable", false);
  editable_elements[0].setAttribute("contenteditable", false);
  editable_elements[1].setAttribute("contenteditable", false);
  
 
  
  // var btn2 = document.getElementsByClassName('.add_chk');
    // button1.display = 'none';
    button1.style.display = 'none';
    button2.style.display = 'none';
    for(const btns of btn3){
      btns.style.display = 'none';
    }
    for(const btns of btn){
      btns.style.display = 'none';
    }
    for(const btns of btn2){
      btns.style.display = 'none';
    }
    for(const btns of btn6){
      btns.style.display = 'none';
    }
    for(const btns of btn5){
      btns.style.display = 'none';
    }

  });

</script>

@endsection