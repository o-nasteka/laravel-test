@extends('layouts.app')

@section('content')

<!-- CONTENT START -->
<div class="row">
    <!-- Display error check input -->
    {{--@include('common.errors')--}}

    <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading lead clearfix">
                Categories
                <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#create_category_modal">
                    Create New Category
                </button>
            </div>
            <div class="panel-body list-group">
                <a href="#" class="list-group-item active">
                    <span class="badge">3</span>
                    All
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">1</span>
                    Category 1
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">1</span>
                    Category 2
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">1</span>
                    Category 3
                </a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading lead clearfix">
                Tasks
                <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#create_task_modal">
                    Create New Task
                </button>
            </div>
            <div class="panel-body">
                <ul class="todo-list ui-sortable">
                    <li class="done">
                        <input type="checkbox" checked="checked" value="">
                        <span class="text">Complete test</span>
                        <small class="label label-danger">Category 1</small>
                        <div class="tools">
                            <i class="glyphicon glyphicon glyphicon-pencil"></i>
                            <i class="glyphicon glyphicon-remove-circle"></i>
                        </div>
                    </li>
                    <li>
                        <input type="checkbox" value="">
                        <span class="text">Learn Laravel</span>
                        <small class="label label-danger">Category 2</small>
                        <div class="tools">
                            <i class="glyphicon glyphicon glyphicon-pencil"></i>
                            <i class="glyphicon glyphicon-remove-circle"></i>
                        </div>
                    </li>
                    <li>
                        <input type="checkbox" value="">
                        <span class="text">Rule the world</span>
                        <span class="label label-success">Category 3</span>
                        <div class="tools">
                            <i class="glyphicon glyphicon glyphicon-pencil"></i>
                            <i class="glyphicon glyphicon-remove-circle"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- CONTENT END -->

</div>

@endsection
