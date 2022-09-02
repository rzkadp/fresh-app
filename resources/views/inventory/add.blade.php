@extends('layouts.master')

@section('title', 'Add New Data')
@section('header-title', 'Add New Data')

@section('content')
<div class="section-body">
    <div class="col-md-6">
        <form method="POST" action="{{ route('inventory.store') }}">
            @csrf()
            <div class="form-group">
                <label for="item_code">Item Code</label>
                <input type="text" class="form-control" id="item_code" name="item_code">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="uom">UOM</label>
                <input type="text" class="form-control" id="uom" name="uom">
            </div>
            <div class="form-group">
                <label for="status">UOM</label>
                <select name="status" id="status" class="form-control">
                    <option value="ACTIVE">ACTIVE</option>
                    <option value="INACTIVE">INACTIVE</option>
                </select>
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