@extends ('layouts.dashboard')
@section('section')
    <div class="panel panel-primary">
	  
		<div class="panel-heading">
		<h3 class="panel-title">Edit Menu</h3>
	
	</div>
		
	<div class="panel-body">
         {{Form::open(array('url' => 'admin/menu/edit', 'method' => 'post')) }}   
            <div class="form-group">
                <input  name="id" type="hidden" placeholder="" value="{{$menu->id}}">
                </div>
            
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" value="{{stripslashes($menu->name)}}" placeholder="Input Name" @if($errors->has('name')) autofocus @endif >
                @if ($errors->has('name'))
                <p class="help-block">Name không được để trống hoặc Name đã tồn tại</p>
                @endif
            </div>
            
            
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description" placeholder="Please">{{stripslashes($menu->description)}}</textarea>
            </div>
                                    
            <button type="submit" class="btn btn-default">Edit</button>
        {{ Form::close() }}
			</div>
	</div>
@stop
