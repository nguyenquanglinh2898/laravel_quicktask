@extends('layout')

@section('content')

    <h2 class="text-center">{{ trans('task.show_task') }}</h2>

    <div class="mb-3">
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">{{ trans('task.back') }}</a>
    </div>

    <div class="col-sm-6">
        <b>{{ trans('task.task_name') }}: </b>
        <span>{{ $task->name }}</p>
    </div>

@endsection
