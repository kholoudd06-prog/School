
@extends('layout')

@section('content')

<h3>Student Details</h3>

<table class="table">
    <tr>
        <th>ID</th>
        <td>{{ $student->id }}</td>
    </tr>

    <tr>
        <th>Name</th>
        <td>{{ $student->name }}</td>
    </tr>

    <tr>
        <th>Phone</th>
        <td>{{ $student->phone }}</td>
    </tr>

    <tr>
        <th>Email</th>
        <td>{{ $student->email }}</td>
    </tr>

    <tr>
        <th>Section</th>
        <td>{{ $student->section }}</td>
    </tr>

    <tr>
        <th>Image</th>
        <td>
            <img src="{{ asset('image/'.$student->image) }}"
                 width="150" height="150">
        </td>
    </tr>
</table>

<a href="{{ route('students.index') }}">Back to Students List</a>

@endsection
