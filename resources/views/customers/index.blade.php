@extends('layouts.app')

@section('content')
    <h1>Customer Accounts</h1>

    <p>Customer records retrieved from the database using Eloquent.</p>

    <table>
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No customers found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection