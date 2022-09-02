@extends('layouts.master')

@section('title', 'Inventory')
@section('header-title', 'Inventory')

@section('content')
<div class="section-body">
    <a href="{{ route('inventory.create') }}" class="btn btn-info mb-4">Add New Data</a>
    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Item Code</th>
                <th>Description</th>
                <th>Status</th>
                <th>Imported Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventory as $i)
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->item_code }}</td>
                    <td>{{ $i->description }}</td>
                    <td>{{ $i->status }}</td>
                    <td>{{ $i->import_date }}</td>
                    <td>
                        <form action="{{ route('inventory.destroy',$i->id) }}" method="POST">
                            <a href="{{ route('inventory.show', $i->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('inventory.edit', $i->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
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