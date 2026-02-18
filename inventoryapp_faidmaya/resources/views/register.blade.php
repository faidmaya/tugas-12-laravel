@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-body">
    <h3>Register</h3>

    <form action="/welcome" method="POST">
      @csrf

      <div class="mb-3">
        <label>First name:</label>
        <input type="text" name="first_name" class="form-control">
      </div>

      <div class="mb-3">
        <label>Last name:</label>
        <input type="text" name="last_name" class="form-control">
      </div>

      <div class="mb-3">
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male <br>
        <input type="radio" name="gender" value="Female"> Female <br>
        <input type="radio" name="gender" value="Other"> Other
      </div>

      <div class="mb-3">
        <label>Nationality:</label>
        <select name="nationality" class="form-control">
          <option>Indonesian</option>
          <option>Malaysian</option>
          <option>Singaporean</option>
        </select>
      </div>

      <div class="mb-3">
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
        <input type="checkbox" name="language[]" value="English"> English <br>
        <input type="checkbox" name="language[]" value="Other"> Other
      </div>

      <div class="mb-3">
        <label>Bio</label>
        <textarea name="bio" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>
</div>
@endsection
