@extends('layouts.master')

@section('title', 'Edit Data')
@section('header-title', 'Edit Data')

@section('content')
<div class="section-body">
    <div class="col-md-6">
        <form method="POST" action="{{ route('menu.update', $menu->id) }}">
            @csrf()
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $menu->link }}">
            </div>
            <div class="form-group">
                <label for="menu_icon">Menu Icon</label>
                <input type="text" class="form-control" id="menu_icon" name="menu_icon" value="{{ $menu->menu_icon }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('menu.index') }}" class="btn btn-warning ml-2">Cancel</a>
        </form>
    </div>
</div>


@endsection

@push('page-scripts')
    
@endpush