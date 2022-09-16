@extends('layouts.master')

@section('title', 'Show Data')
@section('header-title', 'Show Data')

@section('content')
<div class="section-body">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ $menu->link }}" readonly>
        </div>
        <div class="form-group">
            <label for="menu_icon">Menu Icon</label>
            <input type="text" class="form-control" id="menu_icon" name="menu_icon" value="{{ $menu->menu_icon }}" readonly>
        </div>
        <a href="{{ route('menu.index') }}" class="btn btn-sm btn-warning">Back</a>
    </div>
</div>


@endsection

@push('page-scripts')
    
@endpush