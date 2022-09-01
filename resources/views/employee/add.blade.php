@extends('layouts.master')

@section('title', 'Add New Employee')
@section('header-title', 'Add New Employee')

@section('content')
<div class="section-body">
    <div class="col-md-6">
        <form method="POST" action="{{ route('employee.store') }}">
            @csrf()
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="form-group">
                <label for="birth">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="">-- SELECT --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="employee_number">Employee Number</label>
                <input type="text" class="form-control" id="employee_number" name="employee_number">
            </div>
            <div class="form-group">
                <label for="employee_status">Employee Status</label>
                <input type="text" class="form-control" id="employee_status" name="employee_status">
            </div>
            <div class="form-group">
                <label for="departement">Departement</label>
                <input type="text" class="form-control" id="departement" name="departement">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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