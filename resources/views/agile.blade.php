@extends('layouts.master')

@section('content')
</div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Agile board</h2>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div  class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>To-do</h3>
                    <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
                    <div class="input-group">
                        <form class="" action="/addtask" method="post">
                        @csrf
                            <input type="text" placeholder="Add new task. " name="newtask" class="input input-sm form-control">
                            <span class="input-group-btn">
                                    <button type="submit" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add task</button>
                            </span>
                        </form>
                    </div>
                    <ul id="Todo" class="sortable-list connectList agile-list">
                        @foreach($tasks as $task)
                         @if($task->status === 'Todo')
                            <li class="warning-element" data-id="{{$task->id}}">
                                {{$task->tasks}}
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-white">Tag</a>
                                    <i class="fa fa-clock-o"></i> {{$task->created_at}}
                                </div>
                            </li>
                         @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div  class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>In Progress</h3>
                    <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
                    <ul id="InProgress" class="sortable-list connectList agile-list">
                        @foreach($tasks as $task)
                        @if($task->status === 'InProgress')
                        <li class="success-element" data-id="{{$task->id}}">
                            {{$task->tasks}}
                            <div class="agile-detail">
                                <a href="#" class="pull-right btn btn-xs btn-white">Tag</a>
                                <i class="fa fa-clock-o"></i> {{$task->created_at}}
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div  class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>Completed</h3>
                    <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
                    <ul id="Completed" class="sortable-list connectList agile-list">
                        @foreach($tasks as $task)
                        @if($task->status === 'Completed')
                        <li class="info-element" data-id="{{$task->id}}">
                            {{$task->tasks}}
                            <div class="agile-detail">
                                <a href="#" class="pull-right btn btn-xs btn-white">Mark</a>
                                <i class="fa fa-clock-o"></i> {{$task->created_at}}
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>


</div>
<div class="footer">
    <div class="pull-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2015
    </div>
</div>

</div>
</div>
@endsection
