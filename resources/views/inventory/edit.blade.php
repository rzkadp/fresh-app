@extends('layouts.master')

@section('title', 'Edit Data')
@section('header-title', 'Edit Data')

@section('content')
<div class="section-body">
    <div class="col-md-6">
        <form method="POST" action="{{ route('inventory.update', $inventory->id) }}">
            @csrf()
            @method('PUT')
            <div class="form-group">
                <label for="item_code">Item Code</label>
                <input type="text" class="form-control" id="item_code" name="item_code" value="{{ $inventory->item_code }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $inventory->description }}">
            </div>
            <div class="form-group">
                <label for="uom">UOM</label>
                <input type="text" class="form-control" id="uom" name="uom" value="{{ $inventory->uom }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="">-- SELECT --</option>
                    <option value="ACTIVE" @if (old('inventory', $inventory->status) === 'ACTIVE') selected @endif>ACTIVE</option>
                    <option value="INACTIVE" @if (old('inventory', $inventory->status) === 'INACTIVE') selected @endif>INACTIVE</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('inventory.index') }}" class="btn btn-warning ml-2">Cancel</a>
        </form>
    </div>
</div>


@endsection

@push('page-scripts')
    
@endpush