@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="text" class="form-control" id="user_id" name="user_id">
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id">
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <textarea class="form-control" id="note" name="note"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection