@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Calendar of Activities</h1>

<form action ="{{ route('calendar.update', $calendar -> id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="date"><strong>Date: </strong></label>
        <input type="date" name="act_date" id="act_date" class="form-control" autocomplete="off" value="{{ $calendar -> act_date }}" required>
    </div>

    <div class="form-group">
        <label for="act_description">Description</label>
        <textarea class="form-control" name="act_description" id="act_description"  rows="3" required>{{ $calendar -> act_description }}</textarea>
    </div>

        <div class="form-group">
            <div class="col-xs-3 col-sm-3 col-md-4">
                 <input id="uploadImage" type="file" name="act_image" accept="image/*" capture="camera" value="{{ $calendar -> act_image }}" required />
            </div>
        </div>


    <button type = "submit" class="btn btn-sm btn-primary">Save</button>

</form>

@endsection
