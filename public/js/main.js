// Disable enter submit
$(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    if(e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});

// Confirm Delete Task
function confirmDelete(name) {
    var answer = confirm("Are you sure you want to delete?");
    if (answer) {
        console.log(name);
        $(name).submit();
        return true;
    }
    else
        return false;
}


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

// Add category
$('.category-add').on('click', function (e) {
    // Disable click on button action
    e.preventDefault();

    var category = $('#category-name').val();
    var token = $('#cat-token').val();

    $.ajax({
        type: 'POST',
        url: '/category',
        data: {
            '_token': token,
            'category' : category
        } ,

        success: function (data) {
            //$('#cat-body').append(new_cat);
            $('#create_category_modal').modal('hide');
            $('#form-cat').trigger("reset");
            document.location.href = '/';
        },
        error: function (data) {
            alert(data);
        }
    })
});

// Add task
$('.task-add').on('click', function (e) {
    // Disable click on button action
    e.preventDefault();

    var task = $('#task-name').val();
    var category = $('#cat-name').val();
    var token = $('#task-token').val();

   //console.log(token);
   //console.log(category);

    $.ajax({
        type: 'POST',
        url: '/task',
        data: {
            '_token': token,
            'task' : task,
            'category' : category
        } ,

        success: function (data) {
            //console.log(data);
            $('#create_task_modal').modal('hide');
            $('#form-task').trigger("reset");
            document.location.href = '/';
        },
        error: function (data) {
            alert(data);
        }
    })
});

