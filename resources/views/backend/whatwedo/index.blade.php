@extends('backend.master')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Gallery</h1>

<a class="btn btn-sm btn-primary mb-4" href="{{ route('whatwedo.create') }}">Upload New Image</a>

<div class="row">
    <div class="col-12">
        <table class="table-responsive">
            <table class="table table-striped table-bordered dt-responsive wrap" id="gallery">
                <thead class="thead-dark">
                    <tr>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galleries as $gallery)
                    <tr>
                        <td><img src="{{ asset("/storage/gallery_images/".$gallery->gallery_image) }}" width="150px" height="100px" alt="Image"/></td>
                        <td>{{ $gallery -> gallery_description }}</td>
                        <td>{{ $gallery -> gallery_date }}</td>
                        <td>
                            <form action="{{ route('whatwedo.destroy', $gallery) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </table>
    </div>
</div>


@endsection

@section('page_level_scripts')
 <!-- Page level plugins -->
 <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <script>
    $(document).ready( function () {
    $('#gallery').DataTable();
} );
</script>
@endsection
