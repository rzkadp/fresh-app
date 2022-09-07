@extends('layouts.master')

@section('title', 'Add New Data')
@section('header-title', 'Add New Data')

@section('content')
<div class="section-body">
    <form method="POST" action="{{ route('transaction.store') }}">
        @csrf()
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="trx_number">Trx Number</label>
                    <input type="text" class="form-control" id="trx_number" name="trx_number">
                </div>
                <div class="form-group">
                    <label for="user_insert">User</label>
                    <input type="text" class="form-control" id="user_insert" name="user_insert">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="ACTIVE">ACTIVE</option>
                        <option value="INACTIVE">INACTIVE</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('transaction.index') }}" class="btn btn-warning ml-2">Cancel</a>
            </div>
        </div>
    </form>
</div>


@endsection

@push('page-scripts')
    
@endpush