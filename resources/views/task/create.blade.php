@extends('layout')

@section('content')

    <h2 class="text-center">{{ trans('task.add_new_task') }}</h2>

    <div class="mb-3">
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">{{ trans('task.back') }}</a>
    </div>

    <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-sm-6">
            <label for="name">{{ trans('task.task_name') }}</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-success">{{ trans('task.add') }}</button>
    </form>

@endsection
