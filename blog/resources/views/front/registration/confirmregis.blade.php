@extends('layouts.app');
@section('content')
<section >
  <div class="container">
  <div class="row" style="width: 50%">
    <div class="col-sm-12">    
   <form role="form" method="post" action="prm" data-toggle="validator">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value="{{Session::get('email')}}" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="inputPassword" value="{{Session::get('password')}}" name="password" placeholder="Password">
  </div>

   <div class="row">
     <div class="col-sm-6">
         <button type="button" class="btn btn-primary">back</button>
     </div>
     <div class="col-sm-6">
  <button type="submit" class="btn btn-primary">sent</button>
     </div>
   </div>

</form>

    </div>
  </div>
</div>
</section>

@endsection


