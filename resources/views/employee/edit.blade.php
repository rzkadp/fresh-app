@extends('layouts.master')

@section('title', 'Add New Employee')
@section('header-title', 'Add New Employee')

@section('content')
<div class="section-body">
    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
        <div class="row">
            <div class="col-md-6">
                @csrf()
                @method('PUT')
                <div class="form-group">
                    <label for="employee_number">Employee Number</label>
                    <input type="text" class="form-control" id="employee_number" name="employee_number" value="{{ $employee->employee_number }}">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Birth Date</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $employee->date_of_birth }}">
                </div>
                <div class="form-group">
                    <label for="birth">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">-- SELECT --</option>
                        <option value="Male" @if(old('gender', $employee->gender) === 'Male')  selected @endif>Male</option>
                        <option value="Female" @if(old('gender', $employee->gender) === 'Female')  selected @endif>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}">
                </div>
                <div class="form-group">
                    <label for="employee_status">Employee Status</label>
                    <input type="text" class="form-control" id="employee_status" name="employee_status" value="{{ $employee->employee_status }}">
                </div>
                <div class="form-group">
                    <label for="departement">Departement</label>
                    <input type="text" class="form-control" id="departement" name="departement" value="{{ $employee->departement }}">
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('employee.index') }}" class="btn btn-warning ml-2">Cancel</a>
            </div>
    </div>
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