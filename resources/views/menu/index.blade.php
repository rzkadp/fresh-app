@extends('layouts.master')

@section('title', 'Menu Management')
@section('header-title', 'Menu Management')

@section('content')
<div class="section-body">
    <a href="{{ route('menu.create') }}" class="btn btn-success mb-4">Add New Menu</a>
    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Link</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->name }}</td>
                    <td>{{ $m->link }}</td>
                    <td>{{ $m->menu_icon }}</td>
                    <td>
                        <form action="{{ route('menu.destroy',$m->id) }}" method="POST">
                            <a href="{{ route('menu.show', $m->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('menu.edit', $m->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
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