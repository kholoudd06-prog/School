
@extends('layout')

@section('content')

<h1>Welcome to School Management</h1>

<table class="table">
    <tr>
        <td>
            <img src="{{ asset('img/student.jpg') }}" width="150">
            <p>Students</p>
        </td>

        <td>
            <img src="{{ asset('img/teacher.png') }}" width="150">
            <p>Teachers</p>
        </td>
    </tr>

    <tr>
        <td>
            <img src="{{ asset('img/library.png') }}" width="150">
            <p>Library</p>
        </td>

        <td>
            <img src="{{ asset('img/administrator.png') }}" width="150">
            <p>Administrator</p>
        </td>
    </tr>
</table>

@endsection



