@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Mission</h1>

<form action ="{{ route('program.update', $program -> id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="project_date"><strong>Title </strong></label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" autocomplete="off" value="{{ $program -> title }}" required>
    </div>

      <div class="form-group">
        <label for="project_desc"><strong>Description: </strong></label>
        <textarea class="form-control"  name="description" id="description" autocomplete="off" rows="5" required>{{ $program -> description }}</textarea>
    </div>

    <button type = "submit" class="btn btn-sm btn-primary">Update</button>

</form>

@endsection
