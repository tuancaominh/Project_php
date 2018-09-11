@extends ('layouts.dashboard')
@section('section')
@if (session('success'))
<div class="alert alert-success  alert-dismissable " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Thêm Danh Mục vào thành công
</div>
@endif
<style>
    .nav.nav-tabs > li > a {
        background-color: #CFDAE0;
        color: #121212;
    }
    .tab-content {
        background-color: #FFF;
        padding: 15px;
    }
    .tabcordion {
        margin-left: 15px;
    }
    .align-center{
        text-align: center;
    }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    </style>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Tạo Mới Danh Mục</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabcordion">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#product_general" data-toggle="tab" aria-expanded="true">Tổng Quan</a></li>                            
                        </ul>
                        {{Form::open(array('url' => 'admin/category/create', 'method' => 'post')) }} 
                        <div id="myTabContent" class="tab-content">                           
                            <div class="tab-pane fade active in" id="product_general">
                                <div class="row">
                                    <div class="col-md-12 form-horizontal">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tên(Việt) <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7  @if ($errors->has('name')) has-error @endif">
                                                <input type="text" class="form-control" name="name" placeholder="Tên Danh Mục"  @if ($errors->has('name')) autofocus @endif>
                                                       @if ($errors->has('name'))
                                                       <label class="control-label" for="inputError">{{$errors->first('name')}}</label>
                                                @endif
                                            </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tên(Anh) <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7  @if ($errors->has('name_en')) has-error @endif">
                                                <input type="text" class="form-control" name="name_en" placeholder="Name Category"  @if ($errors->has('name_en')) id="inputError" autofocus @endif>
                                                       @if ($errors->has('name_en'))
                                                       <label class="control-label" for="inputError">{{$errors->first('name_en')}}</label>
                                                @endif
                                            </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Chi Tiết(Việt)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="6" class="form-control"  name="description" placeholder="Mô tả Chi tiết"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Chi Tiết(Anh)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="6" class="form-control"  name="description_en" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Đường Dẫn(URL)<span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="url" placeholder="Đường Dẫn URL"  @if ($errors->has('url')) autofocus @endif>
                                                       @if ($errors->has('url'))
                                                       <p class="help-block">Đường Dẫn không được để trống</p>
                                                @endif
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                            <div class="row">
                                <div class="col-md-12 m-t-20 m-b-40 align-center">
                                    <a href="" class="btn btn-default m-r-10 m-t-10"><i class="fa fa-reply"></i> Hủy</a> 
                                    <button type="submit" name="save" class="btn btn-success m-t-10">Lưu Thay Đổi</button>                                            
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop