@extends('layouts.master')

@section('title', 'Add New Menu')
@section('header-title', 'Add New Menu')

@section('content')
<div class="section-body">
    <form method="POST" action="{{ route('menu.store') }}">
        <div class="row">
            <div class="col-md-6">
                @csrf()
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link">
                </div>
                <div class="form-group">
                    <label for="menu_icon">Menu Icon</label>
                    <input type="text" class="form-control" id="menu_icon" name="menu_icon">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('menu.index') }}" class="btn btn-warning ml-2">Cancel</a>
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