@extends('backend.master')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Organizational Chart</h1>

<a class="btn btn-sm btn-primary mb-4" href="{{ route('organization.create') }}">Add People</a>

<div class="row">
    <div class="col-12">
        <table class="table-responsive">
            <table class="table table-striped table-bordered dt-responsive wrap" id="organization">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Position</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($organizations as $organization)
                    <tr>
                        <td>{{ $organization -> org_position }}</td>
                        <td>{{ $organization -> org_name }}</td>
                        <td class="row justify-content-center"><a class="btn btn-sm btn-info"  href="{{ route('organization.edit', $organization -> id) }}">Edit</a>
                            <form action="{{ route('organization.destroy', $organization) }}" method="POST">
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
    $('#organization').DataTable();
} );
</script>
@endsection
