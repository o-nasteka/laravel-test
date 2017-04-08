@extends('layouts.app')

@section('content')

<!-- CONTENT START -->
<div class="row">
    <!-- Display error check input -->
    @include('common.errors')

    {{-- Categories START--}}
    <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading lead clearfix">
                Categories
                <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#create_category_modal">
                    Create New Category
                </button>
            </div>
            <div class="panel-body list-group">
                @foreach ($categories as $category)
                <a href="#" class="list-group-item">
                    <span class="badge">3</span>
                    {{ $category->name }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Categories END --}}

    {{-- Tasks START --}}
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

                        @foreach ($tasks as $task)
                            <li class="">
                                <input type="checkbox" value="">
                                <span class="text">{{ $task->name }}</span>
                                {{--<small class="label label-danger">Category 1</small>--}}
                                <form id="delete-task" action="{{ url('task/'.$task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="tools">
                                        <i data-toggle="modal" data-whatever="@mdo" data-target="#create_task_modal" class="glyphicon glyphicon glyphicon-pencil"></i>
                                        <i onclick="document.getElementById('delete-task').submit();" class="glyphicon glyphicon-remove-circle"></i>
                                    </div>
                                </form>
                            </li>
                        @endforeach


                    </ul>
                </div>
        </div>
    </div>
    {{-- Tasks END --}}

</div>
<!-- CONTENT END -->

</div>

@endsection
