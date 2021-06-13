@extends('backend.master')

@section('content')

 <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Contact Information</h1>
<div class="col-md-12">
@foreach ($contacts as $contact)
<div class="row">
    <dl class="row">
        <dt class="col-sm-3">Contact Number #1:</dt>
        <dd class="col-sm-9">{{ $contact -> contact_number }}</dd>

        <dt class="col-sm-3">Contact Number #2:</dt>
        <dd class="col-sm-9">{{ $contact -> contact_number1 }}</dd>

        <dt class="col-sm-3">Email Address:</dt>
        <dd class="col-sm-9">{{ $contact -> email_add }}</dd>

        <dt class="col-sm-3">Address:</dt>
        <dd class="col-sm-9">{{ $contact -> address }}</dd>

        <dt class="col-sm-3">Bank Name:</dt>
        <dd class="col-sm-9">{{ $contact -> bank_name }}</dd>

        <dt class="col-sm-3">Bank Branch:</dt>
        <dd class="col-sm-9">{{ $contact -> bank_branch }}</dd>

        <dt class="col-sm-3">Bank Account #:</dt>
        <dd class="col-sm-9">{{ $contact -> bank_act_num }}</dd>

        <dt class="col-sm-3">Swift Code #:</dt>
        <dd class="col-sm-9">{{ $contact -> swift_code_num }}</dd>
    </dl>
    <div class="d-flex">
        <a class="btn btn-sm btn-primary p-2" href="{{ route('contact.edit', $contact->id)}}">Edit</a>
    </div>
</div>

@endforeach
</div>
@endsection
