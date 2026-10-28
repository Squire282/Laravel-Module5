@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About the System</h1>

    <p>
        The Tasks for Today Management System is a Laravel application
        that organizes tasks according to their scheduled dates and status.
    </p>

    <p>
        The Welcome page displays only the tasks scheduled for the current
        date, while the Task List page displays every task stored in the
        database. The Profile page retrieves the single user record.
    </p>

    <h2>Developer</h2>

    <p>
        This application was developed by <strong>Mc Kenrick Cafugauan</strong>
        for IT0049 Web System Technologies.
    </p>

    <h2>Technologies Used</h2>

    <ul>
        <li>Laravel 12</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>Eloquent ORM</li>
        <li>Blade templates</li>
        <li>HTML and CSS</li>
    </ul>
@endsection