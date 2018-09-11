@extends('layouts.app');
@section('content')

     <form  method="post" enctype="multipart/form-data" class="form-inline" action="saveimage">
     	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <label for="email">Name</label>
  <input type="text" class="form-control" id="name">
  <label for="pwd">ticker</label>
  <input type="email" class="form-control" name="email" id="email">
  <div></div>
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Logomark</label>
    <input type="file" class="form-control-file" name="hinh" id="hinh">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   

@endsection
