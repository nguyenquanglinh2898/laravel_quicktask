@extends('layout')

@section('content')

    <h2 class="text-center">{{ trans('lesson.show_lesson') }}</h2>

    <div class="mb-3">
        <a href="{{ route('lessons.index') }}" class="btn btn-primary">{{ trans('lesson.back') }}</a>
    </div>

    <div class="col-sm-6">
        <b>{{ trans('lesson.lesson_name') }}: </b>
        <span>{{ $lesson->name }}</p>
    </div>
    <div class="col-sm-6">
        <b>{{ trans('lesson.task_name') }}: </b>
        <span>{{ $lesson->task->name }}</p>
    </div>

@endsection
