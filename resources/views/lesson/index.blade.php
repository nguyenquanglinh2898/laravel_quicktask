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
                        <a href="{{ route('lessons.show', [$lesson->id]) }}" class="btn btn-info">{{ trans('lesson.show') }}</a>
                        <a href="{{ route('lessons.edit', [$lesson->id]) }}" class="btn btn-primary">{{ trans('lesson.edit') }}</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $lesson->id }}">{{ trans('lesson.delete') }}</button>
                        <div class="modal fade" id="delete-{{ $lesson->id }}" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{ trans('lesson.comfirm_delete') }}
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('lessons.destroy', [$lesson->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="{{ trans('lesson.yes') }}">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('lesson.no') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
