$(document).ready(function(){
     $(".sortable-list").sortable({
         connectWith: ".connectList"
     }).disableSelection();
    $( ".sortable-list" ).sortable({
        stop: function( event, ui ) {
            // console.log(ui.item.parent('ul').attr('id'));
            // console.log(ui.item.data('id'));
            var status = ui.item.parent('ul').attr('id');
                taskid = ui.item.data('id');
                _token = $('#token').val();
                console.log(status,taskid);
                 if(status=='Todo'){
                     var order = $("#Todo").sortable("toArray",{ attribute: 'data-id' });
                 }
                 if(status=='InProgress'){
                     var order = $("#InProgress").sortable("toArray",{ attribute: 'data-id' });
                 }
                 if(status=='Completed'){
                     var order = $("#Completed").sortable("toArray",{ attribute: 'data-id' });
                 }
dsd
                console.log(order);
            $.ajax({
                type : "POST",
                url  : '/status',
                data : {'status': status,'taskid': taskid,'order': order,'_token': _token},
                success : function(resp) {
                },
            });
        }
        });
        // $( ".sortable-list" ).sortable({
        //   stop: function( event, ui ) {
        //     var order = $(".sortable-list").sortable("toArray",{ attribute: 'data-id' });
        //       console.log(order);
        //   }
        // });

});
