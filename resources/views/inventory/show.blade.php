@extends('layouts.master')

@section('title', 'Show Data')
@section('header-title', 'Show Data')

@section('content')
<div class="section-body">
    <div class="col-md-6">
        <div class="form-group">
            <label for="item_code">Item Code</label>
            <input type="text" class="form-control" id="item_code" name="item_code" value="{{ $inventory->item_code }}" readonly>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $inventory->description }}" readonly>
        </div>
        <div class="form-group">
            <label for="uom">UOM</label>
            <input type="text" class="form-control" id="uom" name="uom" value="{{ $inventory->uom }}" readonly>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" readonly>
                <option value="">-- SELECT --</option>
                <option value="ACTIVE" @if (old('inventory', $inventory->status) === 'ACTIVE') selected @endif>ACTIVE</option>
                <option value="INACTIVE" @if (old('inventory', $inventory->status) === 'INACTIVE') selected @endif>INACTIVE</option>
            </select>
        </div>
    </div>
</div>


@endsection

@push('page-scripts')
    
@endpush