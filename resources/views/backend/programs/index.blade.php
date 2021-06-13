@extends('backend.master')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Programs & Services</h1>

<a class="btn btn-sm btn-primary mb-4" href="{{ route('program.create') }}">Add Program / Service</a>

<div class="row">
    <div class="col-12">
        <table class="table-responsive">
            <table class="table table-striped table-bordered dt-responsive wrap" id="program">
                <thead class="thead-dark">
                    <tr>
                        <th>Title</th>
                        <th scope="col">Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programs as $program)
                    <tr>
                        <td>{{ $program -> title }}</td>
                        <td>{{ $program -> description }}</td>
                        <td class="row justify-content-center"><a class="btn btn-sm btn-info"  href="{{ route('program.edit', $program -> id) }}">Edit</a>
                            <form action="{{ route('program.destroy', $program) }}" method="POST">
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
    $('#program').DataTable();
} );
</script>
@endsection
