@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Vision</h1>

<form action ="{{ route('about-us.updateVision', $vision -> id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label class="h3 mb-3" for="vision">Update</label>
        <textarea class="form-control" name="vision" id="vision"  rows="3" placeholder="Enter Vision" required>{{ $vision-> vision }}</textarea>
      </div>

    <button type = "submit" class="btn btn-sm btn-primary">Update</button>

</form>

@endsection
