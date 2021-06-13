@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Mission</h1>

<form action ="{{ route('about-us.storeMission') }}" method="post">
    @csrf

    <div class="form-group">
        <label class="h3 mb-3" for="mission">Create</label>
        <textarea class="form-control" name="mission" id="mission"  rows="3" placeholder="Enter Mission" required></textarea>
      </div>

    <button type = "submit" class="btn btn-sm btn-primary">Save</button>

</form>

@endsection
