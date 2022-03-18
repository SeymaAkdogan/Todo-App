@extends('home')
@section('content')
    @isset($error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
    @endisset

    @if (count($activities)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Activity</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($activities as $activity)
            <tr>
                <td>{{ $activity['name'] }}</td>
                @if ($activity['status'] == 0)
                    <td>Not Completed</td>
                @else
                    <td>Completed</td>
                @endif
                <td><a href="/editActivity/{{ $activity['id'] }}" class="btn btn-outline-danger" id="edit_btn">Edit</a></td>
                <td><a href="/deleteActivity/{{ $activity['id'] }}" class="btn btn-outline-danger delete_btn" id="delete_btn">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif

    <script>
        $(document).ready(function(){
            $(".delete_btn").click(function(){
                alert("Are you sure you want to delete this item?");
            });
        });
    </script>

@endsection
