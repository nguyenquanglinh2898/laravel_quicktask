@extends('layout')

@section('content')
    @if($alert = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $alert }}</strong>
        </div>
    @endif

    <h2 class="text-center">{{ trans('lesson.list_lesson') }}</h2>

    <div class="float-left mb-3">
        <a href="{{ route('lessons.create') }}" class="btn btn-primary">{{ trans('lesson.add_new_lesson') }}</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ trans('lesson.lesson_name') }}</th>
                <th scope="col">{{ trans('lesson.task_name') }}</th>
                <th scope="col">{{ trans('lesson.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                    <th scope="row">{{ $lesson->id }}</th>
                    <td>{{ $lesson->name }}</td>
                    <td>{{ $lesson->task->name }}</td>
                    <td>
                        <a href="" class="btn btn-info">{{ trans('lesson.show') }}</a>
                        <a href="" class="btn btn-primary">{{ trans('lesson.edit') }}</a>
                        <form action="" method="post">
                            <input class="btn btn-danger" type="submit" value="{{ trans('lesson.delete') }}"/>
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

@endsection
