@extends('layouts.master')

@section('title', 'Transaction')
@section('header-title', 'Transaction')

@section('content')
<div class="section-body">
    <a href="{{ route('transaction.create') }}" class="btn btn-success mb-4">Add New Data</a>
    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Trx Number</th>
                <th>Date</th>
                <th>User Insert</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trx as $e)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $e->trx_number }}</td>
                    <td>{{ $e->trx_date }}</td>
                    <td>{{ $e->user_insert }}</td>
                    <td>{{ $e->status }}</td>
                    <td>
                        <form action="{{ route('transaction.destroy',$e->id) }}" method="POST">
                            <a href="{{ route('transaction.show', $e->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('transaction.edit', $e->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-confirm"><i class="fas fa-trash-alt"></i></button>
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

    $('.delete-confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete ${name}?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            form.submit();
            }
        });
    });
</script>
    
@endpush