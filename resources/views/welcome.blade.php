@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1>Tasks for Today</h1>

    <p>
        Welcome to the Tasks for Today Management System.
        Below are the tasks scheduled for
        <strong>{{ now()->format('F d, Y') }}</strong>.
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
                    <td colspan="4">No tasks are scheduled for today.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection