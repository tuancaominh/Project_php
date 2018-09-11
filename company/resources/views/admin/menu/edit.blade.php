@extends ('layouts.dashboard')
@section('page_heading','Sửa menu')
@section('section')
  <div class="row">
    <div class="col-md-8">  
      <div class="well">
        <p class="lead"><a href="{{ url('admin/menu')}}" class="btn btn-default pull-right">Quay lại</a> Menu:</p>
		
		{{ Form::model($item, array('url' => "admin/menu/edit/{$item->id}", 'class' => 'form-horizontal')) }}
		<div class="form-group">
		    <label for="label" class="col-lg-3 control-label">Tiêu đề tiếng Việt</label>
		    <div class="col-lg-9">
		      {{ Form::text('label_vi',null,array('class'=>'form-control'))}}
		    </div>
		</div>
		<div class="form-group">
		    <label for="label" class="col-lg-3 control-label">Tiêu đề tiếng Anh</label>
		    <div class="col-lg-9">
		      {{ Form::text('label_en',null,array('class'=>'form-control'))}}
		    </div>
		</div>
		<div class="form-group">
		    <label for="url" class="col-lg-3 control-label">URL</label>
		    <div class="col-lg-9">
		      {{ Form::text('url',null,array('class'=>'form-control'))}}
		    </div>
		</div>
		<div class="form-group">
		    <div class="col-md-6 col-md-offset-6 text-right">
		      <button type="submit" class="btn btn-lg btn-default">Cập nhật</button>
		    </div>
		</div>
		{{ Form::close()}}
      </div>
    </div>
    
  </div>
@stop