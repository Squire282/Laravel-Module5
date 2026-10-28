@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1>User Profile</h1>

    <p>This page displays the single user record stored in the database.</p>

    <table>
        <tbody>
            <tr>
                <th>User ID</th>
                <td>{{ $user->id }}</td>
            </tr>

            <tr>
                <th>Username</th>
                <td>{{ $user->username }}</td>
            </tr>

            <tr>
                <th>Full Name</th>
                <td>{{ $user->full_name }}</td>
            </tr>

            <tr>
                <th>Email Address</th>
                <td>{{ $user->email }}</td>
            </tr>
        </tbody>
    </table>
@endsection