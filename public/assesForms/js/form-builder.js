/* 
This Simple Form Builder was Developed by 
Carlo Montero
Posted/Published in: www.sourcecodester.com
*/
$(function() {

    $('#add_q-item').click(function(e) {
        var el = $('#q-item-clone').clone()
        var f_arr = []
        $('#question-field .question-item').each(function() {
            f_arr.push(parseInt($(this).attr('data-item')))
        })
        var i = f_arr.length
            // console.log(i)
        el.find('.question-item').attr('data-item', i)
        el.find('textarea').attr('name', 'q[' + i + ']')
        $('#question-field').append(el.html())
        $('body,html').animate({ scrollTop: $(this).offset().top }, 'fast')
        _initilize()
    })
    $('#question-field').sortable({
            handle: '.item-move',
            classes: {
                "ui-sortable": "highlight"
            }
        })
        // $("#question-field").disableSelection();

    function _initilize() {
        $('[contenteditable="true"]').each(function() {
            $(this).on("blur focusout", function() {
                if ($(this).text() == "") {
                    $(this).text($(this).attr("title"))
                }
            })

        })
        $('.question-item .form-check').find('label').on('keypress keyup paste cut', function() {
            $(this).siblings('input').val($(this).text())
        })
        $('.question-item .req-chk').click(function() {
            if ($(this).siblings('input[type="checkbox"]').is(":checked") == true) {
                $(this).siblings('input[type="checkbox"]').prop("checked", true).trigger("change") //false
            } else {
                $(this).siblings('input[type="checkbox"]').prop("checked", true).trigger("change")
            }
        })
        $('.rem-q-item').click(function() {
            $(this).closest('.question-item').remove()
        })
        $('.req-item').change(function() {
            var _parent = $(this).closest('.question-item')
            if ($(this).is(":checked") == true) {
                _parent.find("input").first().attr('required', false) //true
                _parent.find("textarea").first().attr('required', false) //true
                $(this).attr('checked', true)
            } else {
                _parent.find("input").first().attr('required', false)
                _parent.find("textarea").first().attr('required', false)
                $(this).attr('checked', false)
            }
        })

        $('.choice-option').change(function() {
            var choice = $(this).val()
            var _field = $(this).closest('.question-item').attr('data-item')
            if (choice == "p") {
                paragraph($(this), _field)
            } else if (choice == "checkbox") {
                $(this).closest('.question-item').find('.choice-field').html('<button type="button" class="add_chk btn btn-sm btn-default border"><i class="fa fa-plus"></i> Add option</button>')
                add_checkbox()
                for (var i = 0; i < 3; i++) {
                    checkbox_field($(this), _field, "Enter Option")
                }
            } else if (choice == "radio") {
                $(this).closest('.question-item').find('.choice-field').html('<button type="button" class="add_radio btn btn-sm btn-default border"><i class="fa fa-plus"></i> Add option</button>')
                add_radio()
                for (var i = 0; i < 3; i++) {
                    radio_field($(this), _field, "Enter Option")
                }
            } 
            else if (choice == "file") {
                // file_field($(this), _field)
            }
            $(this).closest('.question-item').find('.req-item').trigger('change')
        })
    }

    function add_checkbox() {
        $('.add_chk').click(function() {
            var _this = $(this)
            var _field = _this.closest('.question-item').attr('data-item')
            checkbox_field(_this, _field, "Enter Option")
        })
    }

    function add_radio() {
        $('.add_radio').click(function() {
            var _this = $(this)
            var _field = _this.closest('.question-item').attr('data-item')
            radio_field(_this, _field, "Enter Option")
        })
    }

    function paragraph(_this, _field) {
        var el = $('<textarea>')
        el.attr({
            "cols": 30,
            "rows": 5,
            "placeholder": "Write your answer here",
            "name": "q[" + _field + "]",
            "class": "form-control col-sm-12"
        })
        _this.closest('.question-item').find('.choice-field').html(el)
    }

    function file_fieldf(_this, _field) {
        var el = $('<input>')
        el.attr({
            "type": "file",
            "name": "q[" + _field + "]",
            "class": "form-control-file"
        })
        _this.closest('.question-item').find('.choice-field').html(el)
    }

    function checkbox_field(_this, _field, _text = "option") {
        var chk = $("<div>")
        var rem = $("<div>")
        chk.attr({
            "class": "col-sm-11 d-flex align-items-center",
        })
        rem.attr({
            "class": "col-sm-1 rem-on-display",
        })
        rem.append("<button class='btn btn-sm btn-default' type='button'><span class='fa fa-times'></span></button>")
        rem.attr('onclick', "$(this).closest('.row').remove()")
        var item = create_checkbox_field(_field, _text)
        chk.append(item)
        el = $("<div class='row w-100'>")
        el.append(rem)
        el.append(chk)
        _this.closest('.question-item').find('.choice-field .add_chk').before(el)
    }

    function radio_field(_this, _field, _text = "option") {
        var chk = $("<div>")
        var rem = $("<div>")
        chk.attr({
            "class": "col-sm-11 d-flex align-items-center",
        })
        rem.attr({
            "class": "col-sm-1 rem-on-display",
        })
        rem.append("<button class='btn btn-sm btn-default' type='button'><span class='fa fa-times'></span></button>")
        rem.attr('onclick', "$(this).closest('.row').remove()")
        var item = create_radio_field(_field, _text)
        chk.append(item)
        el = $("<div class='row w-100'>")
        el.append(rem)
        el.append(chk)
        _this.closest('.question-item').find('.choice-field .add_radio').before(el)
    }



    function create_checkbox_field(_field, _text) {

        var el = $('<div>')
        el.attr({
            "class": "form-check q-fc"
        })
        var inp = $('<input>')
        inp.attr({
            "class": "form-check-input",
            "name": "q[" + _field + "][]",
            "id": "checkbox-input",
            "type": "checkbox",
            "value": _text
        })
        var label = $('<label>')
        label.attr({
            "class": "form-check-label",
            "contenteditable": true,
            "id": "checkbox-label",
            "title": "Enter option here"
        })
        label.text(_text)
        el.append(inp)
        el.append(label)
        return el
    }

    function create_radio_field(_field, _text) {

        var el = $('<div>')
        el.attr({
            "class": "form-check q-fc"
        })
        var inp = $('<input>')
        inp.attr({
            "class": "form-check-input",
            "name": "q[" + _field + "]",
            "type": "radio",
            "value": _text
        })
        var label = $('<label>')
        label.attr({
            "class": "form-check-label",
            "contenteditable": true,
            "title": "Enter option here"
        })
        label.text(_text)
        el.append(inp)
        el.append(label)
        return el
    }

    _initilize()


  
      
     

    function save_form() {
        var new_el = $('<div>')
        var form_el = $('#form-field').clone()
        var form_code = $("[name='form_code']").length > 0 ? $("[name='form_code']").val() : "";
        var title = $('#form-title').text()
        var e = document.getElementById("mySelectBox");
         var value = e.value;
         var description = $('#form-description').text()
          form_el.find("[name='form_code']").remove()
         new_el.append(form_el)
           console.log("FIELDS::",form_el);

 
        //  start_loader()
         if(!value){
            alert("please choose a Training for this Form");
         }else{
            // alert("Proceed");
            // const form = document.getElementById('checkbox-input').value;
            // const form2 = document.getElementById('checkbox-label').title;
            
            // console.log("checkBox:" , form);
            // console.log("checkBox-Lable:" , form2);
            $.ajax({
                url: "createform" + "?a=save_form",
                method: 'POST',
                data: { form_data: new_el.html(),training_id:value, description: description, title: title, form_code: form_code },
                dataType: 'json',
                error: err => {
                    console.log(err)
                    // alert("an error occured")
                },
                success: function(resp) {
                    if (typeof resp == 'object' && resp.status == 'success') {
                        // alert("Form successfully saved")
                        console.log("success",resp);
                      
                    } else {
                        console.log(resp)
                        // window.location.href = "{{ url('/admin')}}";
                        // alert("an error occured")
                    }
                    end_loader()
                }
            })
         }

        // var training_id = $('#mySelectBox').text();
   
    }
    $('#save_form').click(function() {
        save_form()
        console.log("sss");
        // window.location.href = "/assessment";
        alert("Data submitted successfully!.");
        window.location.href = "/assessment";
        const form = document.getElementById('form-data');
         form.addEventListener('submit', handleSubmit);

    })


    function handleSubmit(event) {
        event.preventDefault();
      
        const myFormData = new FormData(event.target);
        //  const formDataObj = {};
         const formDataObj = Object.fromEntries(myFormData.entries());
         formDataObj.favorite_pet = myFormData.getAll('q[0]');
           for(let key of myFormData.keys()){
            console.log(key,myFormData.get(key));
           }
    //    var rd=  document.querySelector('input[type="checkbox"]')[0]
         console.log("FIELD11::",formDataObj);
      }
})