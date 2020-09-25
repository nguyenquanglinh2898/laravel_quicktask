@extends('layout')

@section('content')

    <h2 class="text-center">{{ trans('task.edit_task') }}</h2>

    <div class="mb-3">
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">{{ trans('task.back') }}</a>
    </div>

    <form action="{{ route('tasks.update', [$task->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group col-sm-6">
            <label for="name">{{ trans('task.task_name') }}</label>
            <input type="text" name="name" class="form-control" value="{{ (old('name')) ? old('name') : $task->name }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-success">{{ trans('task.save') }}</button>
    </form>

@endsection
