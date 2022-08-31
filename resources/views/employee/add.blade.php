@extends('layouts.master')

@section('title', 'Add New Employee')
@section('header-title', 'Add New Employee')

@section('content')
<div class="section-body">
    <form method="POST" action="{{ route('employee.store') }}">
        @csrf()
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection

@push('page-scripts')
<script>
    $(document).ready(function () {
    $('#table').DataTable();
});
</script>
    
@endpush