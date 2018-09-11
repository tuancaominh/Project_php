@extends ('layouts.dashboard')
@section('section')
@if (session('success'))
<div class="alert alert-success  alert-dismissable " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Thêm Danh Mục vào thành công
</div>
@endif
<link rel="stylesheet" href="{{ asset("fileinput/css/fileinput.css") }}" />
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
            <h3 class="panel-title">Tạo Mới Tin Tức</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabcordion">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#news-vn" data-toggle="tab" aria-expanded="true">Tiếng Việt</a></li>
                            <li class=""><a href="#news-en" data-toggle="tab">SEO</a></li>
                            <li class=""><a href="#news-image" data-toggle="tab">Hình ảnh</a></li>
                        </ul>
                        {{Form::open(array('url' => 'admin/news/create', 'method' => 'post','files'=>true)) }} 
                        <div id="myTabContent" class="tab-content">                           
                            <div class="tab-pane fade active in" id="news-vn">
                                <div class="row">
                                    <div class="col-md-12 form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tựa Đề (Việt)<span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="title" placeholder="Tựa đề"  @if ($errors->has('title')) autofocus @endif>
                                                       @if ($errors->has('title'))
                                                       <p class="help-block">Tựa đề không được để trống</p>
                                                @endif
                                            </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tựa Đề (Anh)<span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="title_en" placeholder="Title News"  @if ($errors->has('title_en')) autofocus @endif>
                                                       @if ($errors->has('title_en'))
                                                       <p class="help-block">Tựa đề không được để trống</p>
                                                @endif
                                            </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nội Dung (Việt)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="6" id="editor" class="form-control"  name="content" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nội Dung (Anh)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="6" class="form-control" id="editor-en"  name="content_en"></textarea>
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
                            <div class="tab-pane fade" id="news-en">
                                <div class="row">
                                    <div class="col-md-12 form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Meta (Việt)<span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="meta" placeholder="Meta Tựa đề">                      
                                            </div>                                        
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-sm-3 control-label">Meta (Anh)<span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="meta_en" placeholder="Meta Tựa đề">                      
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Meta Description(Việt)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-6">
                                                <textarea rows="4" class="form-control" name="metadescript" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Meta Description(Anh)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-6">
                                                <textarea rows="4" class="form-control" name="metadescript_en" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Meta Keywords(Việt)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-6">
                                                <textarea rows="4" class="form-control" name="metakeyword" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Meta Keywords(Anh)<span class="asterisk"></span>
                                            </label>
                                            <div class="col-sm-6">
                                                <textarea rows="4" class="form-control" name="metakeyword_en" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="news-image">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">hình ảnh<span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="file" id="fileinput" class="file" name="image" data-max-file-count="1" @if ($errors->has('image')) autofocus @endif>
                                                       @if ($errors->has('image'))
                                                       <p class="help-block">Bạn Chưa chọn hình ảnh</p>
                                                @endif
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12 m-t-20 m-b-40 align-center">
                                    <a href="" class="btn btn-default m-r-10 m-t-10"><i class="fa fa-reply"></i> Hủy</a> 
                                    <button type="submit" name="save" class="btn btn-success m-t-10">Lưu Thay Đổi</button>                                            
                                </div>
                            </div>                     
                        </div>
                        {{ Form::close() }}
                    </div>

                    <script type="text/javascript" src='{{ asset("js/jquery-2.2.3.js") }}'></script>
                    <script type="text/javascript" src='{{ asset("ckeditor/ckeditor.js") }}'></script>
                    <script type="text/javascript" src='{{ asset("fileinput/js/fileinput.js") }}'></script>
                    <script type="text/javascript">
                        CKEDITOR.replace('editor');
                CKEDITOR.replace('editor-en');
                $("#fileinput").fileinput({
                showUpload: false
                });
                    </script>
                </div>
            </div>
        </div>
    </div>
    @stop