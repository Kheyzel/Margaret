@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">New Image</h1>

<form action="{{ route('whatwedo.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-4">
        <div class="form-group">
            <label for="project_date"><strong>Date: </strong></label>
            <input type="date" name="gallery_date" id="gallery_date" class="form-control" placeholder="" autocomplete="off" value="{{ old('project_date') }}" required>
        </div>
    </div>
</div>

        <div class="form-group">
            <label for="project_desc"><strong>Description: </strong></label>
            <textarea class="form-control"  name="gallery_description" id="gallery_description" autocomplete="off" rows="5" required>{{ old('project_desc') }}</textarea>
        </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-xs-3 col-sm-3 col-md-4">
                         <input id="uploadImage" type="file" name="gallery_image" accept="image/*" capture="camera" required />
                    </div>
                </div>
            </div>
    <button type = "submit" class="btn btn-sm btn-primary">Save</button>
</form>

@endsection
