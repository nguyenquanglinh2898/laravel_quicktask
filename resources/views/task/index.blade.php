@extends('layout')

@section('content')
    @if ($alert = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $alert }}</strong>
        </div>
    @endif

    <h2 class="text-center">{{ trans('task.list_task') }}</h2>

    <div class="float-left mb-3">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">{{ trans('task.add_new_task') }}</a>
        <a href="{{ route('home') }}" class="btn btn-primary">{{ trans('task.back') }}</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ trans('task.task_name') }}</th>
                <th scope="col">{{ trans('task.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>
                        <a href="{{ route('tasks.show', [$task->id]) }}" class="btn btn-info">{{ trans('task.show') }}</a>
                        <a href="{{ route('tasks.edit', [$task->id]) }}" class="btn btn-primary">{{ trans('task.edit') }}</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $task->id }}">{{ trans('task.delete') }}</button>
                        <div class="modal fade" id="delete-{{ $task->id }}" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{ trans('task.comfirm_delete') }}
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('tasks.destroy', [$task->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="{{ trans('task.yes') }}">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('task.no') }}</button>
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
