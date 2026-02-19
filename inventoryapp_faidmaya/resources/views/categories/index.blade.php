@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-body">
    <h3>Categories</h3>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add Category</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="{{ route('categories.show', $category) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="3">No categories found.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
