@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
<div class="container container_width">
<div class="row">
    <div class="col-lg-12">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h3><b> {{$form->form_code ? "Edit" : "Create New"}} Form</b></h3>
            </div>
        </div>
    </div>
</div>
<hr class="border-dark">
   <?php
    include "./forms/".$form->form_code.".html" 
   ?>
<script>
       $('#form-field form').prepend("<input type='hidden' name='form_code' value='{{$form->form_code}}'/>")
</script>

<div class="d-none" id = "q-item-clone">
<div class="card mt-3 mb-3 col-md-12 question-item ui-state-default" data-item="0">
    <span class="item-move"><i class="fa fa-braille"></i></span>
    <div class="card-body">
        <div class="row align-items-center d-flex">
            <div class="col-sm-8">
                <p class="question-text m-0" contenteditable="true" title="Write you question here">Write you question here</p>
            </div>
            <div class="col-sm-4">
                <select title="question choice type" name="choice" class='form-control choice-option'>
                    <option value="p">paragraph</option>
                    <option value="checkbox">Mupliple choice (multiple answer)</option>
                    <option value="radio">Mupliple choice (single answer)</option>
                    <option value="file">File upload</option>
                </select>
            </div>
        </div>
        <hr class="border-dark">
        <div class="row ">
            <div class="form-group choice-field col-md-12">
                <textarea name="q[]" class="form-control col-sm-12" cols="30" rows="5" placeholder="Write your answer here"></textarea>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="w-100 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <input class="form-check-input req-item" type="checkbox" value="" >
                <label class="form-check-label req-chk" for="">
                    * Required
                </label>
            </div>
            <button class="btn btn-default border rem-q-item" type="button"><i class="fa fa-trash"></i></button>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection