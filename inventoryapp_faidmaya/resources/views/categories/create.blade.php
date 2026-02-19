@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-body">
    <h3>Create Category</h3>

    <form action="{{ route('categories.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</div>
@endsection
