@extends('layouts.master')

@section('title', 'Detail Employee')
@section('header-title', 'Detail Employee')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" readonly>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" id="address" name="address" readonly>{{ $employee->address }}</textarea>
            </div>
            <a href="{{ route('employee.index') }}" class="btn btn-sm btn-info">Back</a>
        </div>
    </div>
</div>


@endsection

@push('page-scripts')
    
@endpush