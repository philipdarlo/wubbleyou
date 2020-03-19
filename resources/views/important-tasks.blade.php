@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Important Tasks
                </div>
                <div class="panel-body">
                    <!-- Current Tasks -->
                    @if (count($tasks) > 0)
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>Created By</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        <td class="table-text"><div>{{ $task->userName }}</div></td>
                                        <td class="table-text"><div>{{ $task->email }}</div></td>
                                        <!-- Task Delete Button -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        Nothing to diplay.
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
