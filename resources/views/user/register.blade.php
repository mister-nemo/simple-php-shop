@extends('layout')

@section('content')
  <form class="form-signin">
  <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Register</h1>
  <label for="inputEmail" class="sr-only">Name</label>
  <input type="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <label for="inputPassword" class="sr-only">Repeat password</label>
  <input type="password" id="inputRepeatPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
</form>
@stop