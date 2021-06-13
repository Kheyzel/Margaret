@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Mission</h1>

<form action ="{{ route('about-us.updateMission', $mission -> id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label class="h3 mb-3" for="mission">Update</label>
        <textarea class="form-control" name="mission" id="mission"  rows="3" placeholder="Enter Mission" required>{{ $mission -> mission }}</textarea>
      </div>

    <button type = "submit" class="btn btn-sm btn-primary">Update</button>

</form>

@endsection
