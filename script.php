<script>
$(document).ready(function() {

    var container = $("#itemContainer");
    var workerContainer = $("#workerContainer");
    var addmore = $("#addMore")
    var addmoreWorker = $("#addMoreWorker")
    var indexWorker = <?php 
        if(isset($lastWorkerKey)) {echo $lastWorkerKey+1;} else {echo "1";}
        ?>;
    var indexItems = <?php 
        if(isset($lastItemsKey)) {echo $lastItemsKey+1;} else {echo "1";}
        ?>;

    var driverNameForm = $("#driverNameForm");
    var driverNumForm = $("#driverNumForm")
    var carTypeForm = $("#carTypeForm")
    var carNameForm = $("#carNameForm")
    var carNumForm = $("#carNumForm")
    var itemsForm = $("#itemsForm")
    var workersForm = $("#workersForm")
    var workersWorkForm = $("#workersWorkForm");

    var driverInput = $("#driver");
    var carNumInput = $("#carNum");

    var submit = $("#submit");
    var reset = $("#reset");

    submit.hide();
    reset.hide();
    driverNameForm.hide();
    driverNumForm.hide();
    carNameForm.hide();
    carNumForm.hide();
    carTypeForm.hide()
    itemsForm.hide();
    workersForm.hide();
    workersWorkForm.hide();

    addmore.on('click', function() {
        var text = ` <div class="input-group mb-3">
        <input type="text" class="form-control" id="item${indexItems}" name="item${indexItems}">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" id="remove" type="button">حذف</button>
        </div>
        </div>`;
        
        
        container.append(text);       
        indexItems++;
    });

    addmoreWorker.on('click', function() {
        var text = ` <div class="input-group mb-3">
        <input type="text" class="form-control" id="worker${indexWorker}" name="worker${indexWorker}">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" id="remove" type="button">حذف</button>
        </div>
        </div>`;
        
        
        workerContainer.append(text);       
        indexWorker++;
    });

    $("body").on('DOMSubtreeModified', ".editableP", function() {
        $('#customhtml').val($('.editableP').html());
    });

    $('.printMe').on('click',function(){
        window.print();
    });

    $('.editableP').on('click', function() {
        $('.saveP').show();
    });

    $('input[type=radio][name=type]').change(function() {
        if (this.value == '1') {
            carNumInput.prop('required',true);
            driverInput.prop('required',true);
            driverNameForm.show();
            driverNumForm.show();
            carNameForm.show();
            carNumForm.show();
            carTypeForm.show()
            itemsForm.show();
            workersForm.hide();
            workersWorkForm.hide();
            submit.show();
            reset.show();
        }
        else if (this.value == '2') {
            carNumInput.prop('required',false);
            driverInput.prop('required',false);
            driverNameForm.hide();
            driverNumForm.hide();
            carNameForm.hide();
            carNumForm.hide();
            carTypeForm.hide()
            itemsForm.hide();
            workersForm.show();
            workersWorkForm.show();
            submit.show();
            reset.show();


        }else if (this.value == '3') {
            carNumInput.prop('required',true);
            driverInput.prop('required',true);
            driverNameForm.show();
            driverNumForm.show();
            carNameForm.show();
            carNumForm.show();
            carTypeForm.show()
            itemsForm.hide();
            workersForm.show();
            workersWorkForm.show();
            submit.show();
            reset.show();

            
        }else if (this.value == '4') {
            carNumInput.prop('required',true);
            driverInput.prop('required',true);
            driverNameForm.show();
            driverNumForm.show();
            carNameForm.show();
            carNumForm.show();
            carTypeForm.show()
            itemsForm.show();
            workersForm.show();
            workersWorkForm.show();
            submit.show();
            reset.show();

            
        }else if (this.value == '5') {
            carNumInput.prop('required',true);
            driverInput.prop('required',true);
            driverNameForm.show();
            driverNumForm.show();
            carNameForm.show();
            carNumForm.show();
            carTypeForm.show()
            itemsForm.hide();
            workersForm.hide();
            workersWorkForm.hide();
            submit.show();
            reset.show();

        }
    });

    $('form').submit(function(e) {
        $('input[type=radio][name=type]').prop('disabled',false);
    });
});

$(document).on('click','#remove', function()
{
    $(this).parents('.input-group').remove();
});

</script>