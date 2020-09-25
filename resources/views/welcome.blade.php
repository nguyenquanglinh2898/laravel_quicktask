@extends('layout')

@section('content')

    <div>
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">{{ trans('task.manage_task') }}</a>
        <a href="{{ route('lessons.index') }}" class="btn btn-info">{{ trans('lesson.manage_lesson') }}</a>
    </div>

@endsection
