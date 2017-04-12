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
            <div id="cat-body" class="panel-body list-group">
                <?php $i = 1;?>
                @foreach ($categories as $category)

                <a href="#" class="list-group-item <?php if($i == 1) echo 'active'; ?>">

                    {{-- Category number 'badge' --}}
                    <span class="badge">{{ $category->getTask->count() }}</span>

                    {{--Delete Category --}}
                    @if( $category->getTask->count() == 0 )
                    <form id="delete-category{{$i}}" action="{{ url('category/'.$category->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    {{--<i onclick="document.getElementById('delete-category').submit();" class="glyphicon glyphicon-remove-circle pull-right"> </i>--}}
                    <i onclick="confirmDelete('#delete-category{{$i}}');" class="glyphicon glyphicon-remove-circle pull-right"> </i>
                    </form>
                    @endif
                    {{--Delete Category END --}}

                    {{-- Category name --}}
                    {{ $category->name }}
                </a>
                 <?php $i++;?>
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
                <div id="" class="panel-body">
                    <ul class="todo-list ui-sortable">
                        <?php $i=0; ?>
                        @foreach ($tasks as $task)
                            <li class="main-task{{$i}}">
                                <input onclick="checkList({{$i}});" class="task-list" type="checkbox" value="">
                                <span class="text">{{ $task->name }}</span>
                                <small class="label <?php if($i % 2 == 0 ) echo 'label-success'; else echo 'label-danger';?> ">{{ $task->getCategory->name }}</small>
                                <form class="delete-task" id="delete-task{{$i}}" action="{{ url('task/'.$task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="tools">
                                        <i data-toggle="modal" data-name="{{ $task->name }}" data-cat="{{ $task->getCategory->id }}" data-target="#update_task_modal" class="glyphicon glyphicon glyphicon-pencil"></i>
                                        {{--<i onclick="document.getElementById('delete-task{{$i}}').submit();" class="glyphicon glyphicon-remove-circle"></i>--}}
                                        <i onclick="confirmDelete('#delete-task{{$i}}');" class="glyphicon glyphicon-remove-circle"></i>
                                    </div>
                                </form>
                            </li>
                                <?php $i++; ?>
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
