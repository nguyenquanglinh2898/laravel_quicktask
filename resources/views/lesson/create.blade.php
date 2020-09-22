@extends('layout')

@section('content')

    <h2 class="text-center">{{ trans('lesson.add_new_lesson') }}</h2>

    <div class="mb-3">
        <a href="{{ route('lessons.index') }}" class="btn btn-primary">{{ trans('lesson.back') }}</a>
    </div>

    <form action="{{ route('lessons.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-sm-6">
            <label for="name">{{ trans('lesson.lesson_name') }}</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="name">{{ trans('lesson.task_name') }}</label>
            <select class="form-control" name="task_id">
                @foreach ($tasks as $task)
                    <option value="{{ $task->id }}">{{ $task->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">{{ trans('lesson.add') }}</button>
    </form>

@endsection
