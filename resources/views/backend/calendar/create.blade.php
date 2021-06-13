@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Calendar of Activities</h1>

<form action ="{{ route('calendar.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="date"><strong>Date: </strong></label>
        <input type="date" name="act_date" id="act_date" class="form-control" autocomplete="off" value="{{ old('act_date') }}" required>
    </div>

    <div class="form-group">
        <label for="act_description">Description</label>
        <textarea class="form-control" name="act_description" id="act_description"  rows="3" required>{{ old('act_description') }}</textarea>
    </div>

        <div class="form-group">
            <div class="col-xs-3 col-sm-3 col-md-4">
                 <input id="uploadImage" type="file" name="act_image" accept="image/*" capture="camera" required/>
            </div>
        </div>


    <button type = "submit" class="btn btn-sm btn-primary">Save</button>

</form>

@endsection
