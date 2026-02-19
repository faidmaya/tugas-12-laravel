@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-body">
    <h3>Category Detail</h3>

    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Name:</strong> {{ $category->name }}</p>
    <p><strong>Description:</strong> {{ $category->description }}</p>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
  </div>
</div>
@endsection
