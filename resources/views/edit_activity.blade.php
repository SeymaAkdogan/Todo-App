@extends('home')
@section('content')

@isset ($error)
<div class="alert alert-danger mb-3">
    {{ $error }}
</div>
@endisset
<form action="/editActivity/{{ $activity['id'] }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="activity_name" class="form-label">Activity Name</label>
        <input type="text" class="form-control" id="activity_name" name="activity_name"
        value="{{ $activity['name'] }}" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="status" name="status" @if (@$activity['status']) checked @endif>
        <label class="form-check-label" for="status">Activity Status</label>
    </div>
    <button class="btn btn-danger" type="submit">Edit</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger mx-4">Cancel</a>
</form>



@endsection
