
// add Check List Done class
function checkList1(e){
    var task = '.' + $('.main-task' + e).attr("class");


    $('.task-list').on('change', function(){
        if ($(this).is(':checked')){
            // console.log($(task).addClass('done'));
            // $('.task-list').prop('checked', true);
            $(task).addClass('done');
        }
        else {
            // $('.task-list').prop('checked', false);
            $(task).removeClass('done');
        }
    });

}

// Update tasks button
$('#update_task_modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var task = button.data('name'); // Extract info from data-* attributes
    var cat = button.data('cat'); // Extract info from data-* attributes
    // var cat = button.data('cat'); // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding
    // library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text('Edit task: ' + task);
    modal.find('.modal-body #task-name').val(task);
    modal.find('.modal-body #cat-name').val(cat);
})

