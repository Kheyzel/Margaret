@extends('backend.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800 text-center">Contact Information</h1>

<form action ="{{ route('contact.update', $contact -> id) }}" method="post">
    @csrf
    @method('PUT')
<div class="col-sm-12">
    <div class="row">
    <div class="form-group col-sm-6">
        <label for="contact"><strong>Contact Number #1:</strong></label>
        <input type="text" name="contact_number" id="contact_number" class="form-control"  autocomplete="off" value="{{ $contact -> contact_number }}" required>
    </div>

    <div class="form-group col-sm-6">
        <label for="contact"><strong>Contact Number #2: </strong></label>
        <input type="text" name="contact_number1" id="contact_number1" class="form-control"  autocomplete="off" value="{{ $contact -> contact_number1 }}" required>
    </div>
</div>

    <div class="form-group">
        <label for="contact"><strong>Email Address: </strong></label>
        <input type="text" name="email_add" id="email_add" class="form-control"  autocomplete="off" value="{{ $contact -> email_add }}" required>
    </div>

    <div class="form-group">
        <label for="contact"><strong>Address: </strong></label>
        <input type="text" name="address" id="address" class="form-control"  autocomplete="off" value="{{ $contact -> address }}" required>
    </div>

    <div class="form-group">
        <label for="contact"><strong>Bank Name: </strong></label>
        <input type="text" name="bank_name" id="bank_name" class="form-control"  autocomplete="off" value="{{ $contact -> bank_name }}">
    </div>

    <div class="form-group">
        <label for="contact"><strong>Bank Branch: </strong></label>
        <input type="text" name="bank_branch" id="bank_branch" class="form-control"  autocomplete="off" value="{{ $contact -> bank_branch }}">
    </div>

    <div class="form-group">
        <label for="contact"><strong>Bank Account #: </strong></label>
        <input type="text" name="bank_act_num" id="bank_act_num" class="form-control"  autocomplete="off" value="{{ $contact -> bank_act_num }}">
    </div>

    <div class="form-group">
        <label for="contact"><strong>Swift Code #: </strong></label>
        <input type="text" name="swift_code_num" id="swift_code_num" class="form-control"  autocomplete="off" value="{{ $contact -> swift_code_num }}">
    </div>
    <button type = "submit" class="btn btn-sm btn-primary p-2">Update</button>
</div>
</form>

@endsection
