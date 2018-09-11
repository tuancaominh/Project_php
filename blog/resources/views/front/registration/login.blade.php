@extends('layouts.app');
@section('content')
<section >
  <div class="container">
  <div class="row" style="width: 50%">
<div class="col-sm-12">
  @if(count($errors) >0)
    <div class="alert alert-danger">
    <u>
    @foreach($errors->all() as $err)
      <li>
    {{$err}}
      </li>
    @endforeach
    </u>
    </div>
@endif
</div>
@if(session('alert'))
<div class="alert alert-success" role="alert">
  {{session('alert')}}
</div>
@endif
    <div class="col-sm-12">    
   <form role="form" method="post" action="postlogin" data-toggle="validator">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
</section>

@endsection


