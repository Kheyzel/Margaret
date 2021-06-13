@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Organizational Chart</h1>

<form action ="{{ route('organization.update', $organization -> id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="project_date"><strong>Title </strong></label>
        <input type="text" name="org_position" id="org_position" class="form-control" placeholder="Enter Position" autocomplete="off" value="{{ $organization -> org_position }}" required>
    </div>

    <div class="form-group">
        <label for="project_date"><strong>Title </strong></label>
        <input type="text" name="org_name" id="org_name" class="form-control" placeholder="Enter Full Name" autocomplete="off" value="{{ $organization -> org_name }}" required>
    </div>



    <button type = "submit" class="btn btn-sm btn-primary">Update</button>

</form>

@endsection
