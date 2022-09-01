@extends('layouts.master')

@section('title', 'Add New Employee')
@section('header-title', 'Add New Employee')

@section('content')
<div class="section-body">
    <div class="col-md-6">
        <form method="POST" action="{{ route('employee.update', $employee->id) }}">
            @csrf()
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
                <input type="hidden" class="form-control" id="id" name="id" value="{{ $employee->id }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" id="address" name="address">{{ $employee->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>


@endsection

@push('page-scripts')
<script>
    $(document).ready(function () {
    $('#table').DataTable();
});
</script>
    
@endpush