@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-body">
    <h3>Edit Category</h3>

    <form action="{{ route('categories.update', $category) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
      </div>

      <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $category->description }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</div>
@endsection
