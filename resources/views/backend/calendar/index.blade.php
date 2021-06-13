@extends('backend.master')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Gallery</h1>

<a class="btn btn-sm btn-primary mb-4" href="{{ route('calendar.create') }}">Add an Activity</a>

<div class="row">
    <div class="col-12">
        <table class="table-responsive">
            <table class="table table-striped table-bordered dt-responsive wrap" id="calendar">
                <thead class="thead-dark">
                    <tr>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calendars as $calendar)
                    <tr>
                        <td><img src="{{ asset("/storage/calendar_images/".$calendar -> act_image) }}" width="150px" height="100px" alt="Image"/></td>
                        <td>{{ $calendar -> act_description }}</td>
                        <td>{{ $calendar -> act_date }}</td>
                        <td class="row justify-content-center"><a class="btn btn-sm btn-info"  href="{{ route('calendar.edit', $calendar -> id) }}">Edit</a>
                            <form action="{{ route('calendar.destroy', $calendar) }}" method="POST">
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
    $('#calendar').DataTable();
} );
</script>
@endsection
