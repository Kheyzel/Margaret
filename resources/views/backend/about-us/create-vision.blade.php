@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Vision</h1>

<form action ="{{ route('about-us.storeVision') }}" method="post">
    @csrf

    <div class="form-group">
        <label class="h3 mb-3" for="vision">Create</label>
        <textarea class="form-control" name="vision" id="vision"  rows="3" placeholder="Enter Vision" required></textarea>
      </div>

    <button type = "submit" class="btn btn-sm btn-primary">Save</button>

</form>

@endsection
