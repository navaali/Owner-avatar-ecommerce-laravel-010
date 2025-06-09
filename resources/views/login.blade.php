@extends('master')
@section("content")



<div class="container custom-login">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <form>
        <div class="mb-3 row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
  </div>
</div>

@endsection
