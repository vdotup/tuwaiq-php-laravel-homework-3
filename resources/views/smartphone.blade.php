<Style>
    .form {
        margin-left: 5rem;
        margin-right: 5rem;
    }
</Style>

@extends('layouts.app')

@section('content')
    <form class="form" action="\smartphone" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="NamePhone">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="PricePhone">
        </div>
        <div class="mb-3">
            <label class="form-label">Color</label>
            <input type="text" class="form-control" name="ColorPhone">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
