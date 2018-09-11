@extends ('layouts.dashboard')
@section('section')
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
        <h3 class="panel-title">Chi Tiết Liên Hệ</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="tabcordion">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#product_general" data-toggle="tab" aria-expanded="true">Liên Hệ</a></li>                           
                    </ul>                 
                    <div id="myTabContent" class="tab-content">                           
                        <div class="tab-pane fade active in" id="product_general">
                            <div class="row">
                                <div class="col-md-12 form-horizontal">                                                                
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tên <span class="asterisk">:</span>
                                        </label>
                                        <div class="col-sm-7">
                                            {{$contact->name}}
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Công ty <span class="asterisk">:</span>
                                        </label>
                                        <div class="col-sm-7">
                                            {{$contact->company}}
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Địa Chỉ <span class="asterisk">:</span>
                                        </label>
                                        <div class="col-sm-7">
                                            {{$contact->adress}}
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Điện Thoại <span class="asterisk">:</span>
                                        </label>
                                        <div class="col-sm-7">
                                            {{$contact->tel}}
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Fax: <span class="asterisk">:</span>
                                        </label>
                                        <div class="col-sm-7">
                                            {{$contact->fax}}
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email <span class="asterisk">:</span>
                                        </label>
                                        <div class="col-sm-7">
                                            {{$contact->email}}
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nội Dung <span class="asterisk">:</span>
                                        </label>
                                        <div class="col-sm-7">
                                            {{$contact->content}}
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
                </div>
            </div>
        </div>
    </div>
</div>
@stop
