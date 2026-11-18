
@extends('layout')

@section('content')

<h3>Edit Student</h3>

<form method="POST" action="{{ route('students.update', $student->id) }}"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name"
               value="{{ $student->name }}">
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" name="email"
               value="{{ $student->email }}">
    </div>

    <div class="form-group">
        <label>Phone:</label>
        <input type="text" class="form-control" name="phone"
               value="{{ $student->phone }}">
    </div>

    <div class="form-group">
        <label>Section:</label>
        <input type="text" class="form-control" name="section"
               value="{{ $student->section }}">
    </div>

    <div class="form-group">
        <label>Current Image:</label><br>
        <img src="{{ asset('image/'.$student->image) }}"
             width="100" height="100">
    </div>

    <div class="form-group">
        <label>New Image (optional):</label>
        <input type="file" class="form-control" name="image">
    </div>

    <button type="submit" class="btn btn-primary">
        Update Student
    </button>

</form>

@endsection

