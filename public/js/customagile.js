$(document).ready(function(){

     $(".sortable-list").sortable({
         connectWith: ".connectList"
     }).disableSelection();
     // Make Tasks Sortable
    $( ".sortable-list" ).sortable({
        stop: function( event, ui ) {
        // Get The Status Of Task After Sortable Event Stop
            var status = ui.item.parent('ul').attr('id');
                taskid = ui.item.data('id');
                _token = $('#token').val();
            // Get Order Acording To Status
                 if(status=='Todo'){
                     var order = $("#Todo").sortable("toArray",{ attribute: 'data-id' });
                 }
                 if(status=='InProgress'){
                     var order = $("#InProgress").sortable("toArray",{ attribute: 'data-id' });
                 }
                 if(status=='Completed'){
                     var order = $("#Completed").sortable("toArray",{ attribute: 'data-id' });
                 }
            // Update Status And Order Of Task
            $.ajax({
                type : "POST",
                url  : '/status',
                data : {'status': status,'taskid': taskid,order,'_token': _token},
                success : function(resp) {
                },
            });
        }
        });

    // Make Tasks Edit and Delete
        // updateTask
    $("#taskAll").on("click",".editTsk",function() {
        $(".taskList").removeClass("selected");
        $(this).parent().parent().addClass("selected");
        var tskId   = $(".selected").attr('data-id');
            tskEdt  = $(".selected .taskP").html();
            _token  = $('#token').val();
            edtHtml = `<textarea name="name" rows="2" class="input input-sm form-control editTaskInput" >`+tskEdt+`</textarea>`
        $(".selected .taskP").html(edtHtml);
        $(".selected .updateTsk").html(`<button class="editTaskBtn btn btn-xs btn-white ">Save Task</button><br>`);
        $(".updateTsk").click(function() {
            var task = $(".editTaskInput").val();
            $.ajax({
                type    : "post",
                url     : '/updateTask',
                data    : {'edtId':tskId,'edtTsk':task,'_token': _token},
                success : function(resp) {
                    $(".selected .updateTsk").html('');
                    $(".selected .taskP").html(task);
                }
            });
        });
    });

        // Delete Task
    $("#taskAll").on("click",".deleteTsk",function() {
        $(".taskList").removeClass("selected");
        $(this).parent().parent().addClass("selected");
        var tskId   = $(".selected").attr('data-id');
            _token  = $('#token').val();
        $.ajax({
            type    : "post",
            url     : '/deleteTask',
            data    : {'edtId':tskId,'_token': _token},
            success : function(resp) {
                $(".selected").remove()
            }
        });
    });

});
