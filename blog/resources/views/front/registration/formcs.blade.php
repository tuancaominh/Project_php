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

<section>


</section>
<div class="row">
<div class="col-sm-12"></div>

</div>

    <div class="col-sm-12">    
   <form role="form" method="post" action="prm" data-toggle="validator">
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
  <div class="form-group">
    <label for="exampleInputPassword1"> ConfirmPassword</label>
    <input type="password" class="form-control" id="inputConfirm" placeholder="Password" name="confirm_password" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"   >
    <label class="form-check-label" for="exampleCheck1" value="1" name="ck">I agree with H&B Term and Condiitions.
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
  </div>
</div>
</section>

@endsection


