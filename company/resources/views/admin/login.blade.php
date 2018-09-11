@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Thông Tin Đăng Nhập')
               @section ('login_panel_body')
                        {{ Form::open(array('url' => 'admin/login', 'method' => 'post')) }}
                            <fieldset>
                                <div class="form-group">
                                	@if (Session::has('login_failed'))
                                	<div class="alert alert-danger " role="alert"><i class="fa fa-remove"></i>Tên đăng nhập hoặc mật khẩu không đúng!!!</div>
                                	@endif
                                	@if ($errors->has('email'))
                                	<div class="form-group has-error">
                                	<label class="control-label" for="inputError">{{$errors->first('email')}}</label>
                               		@endif
                                    	<input @if ($errors->has('email')) id ="inputError" @endif class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                	@if ($errors->has('email'))
                                    </div>
                               		@endif
                                </div>
                                <div class="form-group">
                                	@if ($errors->has('password'))
                                	<div class="form-group has-error">
                                	<label class="control-label" for="inputError">{{$errors->first('password')}}</label>
                               		@endif
                                    	<input @if ($errors->has('password')) id ="inputError" @endif class="form-control" placeholder="Password" name="password" type="password" value="">
                                	@if ($errors->has('password'))
                                    </div>
                               		@endif
                                </div>
                                <input type="submit" value="Đăng Nhập" class="btn btn-primary btn-lg btn-block" />
                            </fieldset>
                        {{ Form::close() }}
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop