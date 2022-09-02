@extends('layouts.master')

@section('title', 'Employee')
@section('header-title', 'Employee')

@section('content')
<div class="section-body">
    <a href="{{ route('employee.create') }}" class="btn btn-success mb-4">Add New Employee</a>
    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Employee ID</th>
                <th>Employee Status</th>
                <th>Departement</th>
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
                    <td>{{ $e->employee_number }}</td>
                    <td>{{ $e->employee_status }}</td>
                    <td>{{ $e->departement }}</td>
                    <td>{{ $e->address }}</td>
                    <td>{{ $e->phone }}</td>
                    <td>
                        <form action="{{ route('employee.destroy',$e->id) }}" method="POST">
                            <a href="{{ route('employee.show', $e->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('employee.edit', $e->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
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