@extends('backend.master')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">About Us</h1>

<a class="btn btn-sm btn-primary mb-4" href="{{ route('about-us.createMission') }}">Add Mission</a>
<a class="btn btn-sm btn-primary mb-4" href="{{ route('about-us.createVision') }}">Add Vision</a>

<div class="row">
    <div class="col-12">
        <table class="table-responsive">
            <table class="table table-borderless dt-responsive wrap" id="mission">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Mission</th>
                        <th scope="col">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($missions as $mission)
                    <tr>
                        <td>{{ $mission -> mission }}</td>
                        <td class="row align-content-center"><a class="btn btn-sm btn-info"  href="{{ route('about-us.editMission', $mission -> id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('about-us.destroyMission', $mission) }}" method="POST">
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

<hr>

<div class="row">
    <div class="col-12">
        <table class="table-responsive">
            <table class="table table-borderless dt-responsive wrap" id="vision">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Vision</th>
                        <th scope="col">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visions as $vision)
                    <tr>
                        <td>{{ $vision -> vision }}</td>
                        <td class="row align-content-center"><a class="btn btn-sm btn-info"  href="{{ route('about-us.editVision', $vision -> id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('about-us.destroyVision', $vision) }}" method="POST">
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
    $('#mission').DataTable();
} );
</script>

<script>
    $(document).ready( function () {
    $('#vision').DataTable();
} );
</script>
@endsection
