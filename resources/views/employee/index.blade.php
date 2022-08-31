@extends('layouts.master')

@section('title', 'Employee')
@section('header-title', 'Employee')

@section('content')
<div class="section-body">
    <a href="{{ route('employee.create') }}" class="btn btn-info mb-4">Add New Employee</a>
    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->address }}</td>
                    <td>{{ $e->phone }}</td>
                    <td>
                        <a href="{{ route('employee.edit', $e->id) }}" class="badge badge-sm badge-info">Edit</a>
                        <a href="{{ route('employee.destroy', $e->id) }}" class="badge badge-sm badge-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@push('page-scripts')
<script>
    $(document).ready(function () {
    $('#table').DataTable();
});
</script>
    
@endpush