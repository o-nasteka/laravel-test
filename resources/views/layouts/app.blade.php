<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- CSS и JavaScript -->
    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" type="text/css" >

    {{--<script src="{{ asset('/js/main.js') }}"></script>--}}

</head>

<body>
<br>
<div class="container">
    <!-- NAVBAR START -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">TO-DO List</a>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->
</div>

<div class="container">
<!-- CONTENT START -->
    @yield('content')
<!-- CONTENT END -->
</div>

<!-- CATEGORY MODAL START -->
<!-- Add new task form START -->
<form action="{{ url('category') }}" method="POST" class="">
    {{ csrf_field() }}
<div id="create_category_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Create New Category</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>List Name</label>
                        <input type="text" name="category" class="form-control" placeholder="List Name" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- Add new category form END -->
<!-- CATEGORY MODAL END -->

<!-- TASK MODAL START -->
<!-- Add new task form START -->
<form action="{{ url('task') }}" method="POST" class="">
    {{ csrf_field() }}
    <div id="create_task_modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Create New Task</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Task</label>
                            <input type="text" name="name" id="task-name" value="" class="form-control" placeholder="Task" required>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                {{--<option>None</option>--}}

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Add new task form END -->
<!-- TASK MODAL END -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>