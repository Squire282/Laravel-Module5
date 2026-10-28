@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h1>Complete Task List</h1>

    <p>
        This page displays every task stored in the database,
        ordered by task date.
    </p>

    <table>
        <thead>
            <tr>
                <th>Task ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->task_date->format('F d, Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No tasks were found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection