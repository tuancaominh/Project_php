@extends('layouts.dashboard')
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
            <h3 class="panel-title">Tạo Mới Sản Phẩm</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabcordion">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#product_general" data-toggle="tab" aria-expanded="true">Tổng quan</a></li>
                            <li class=""><a href="#product_meta" data-toggle="tab">SEO</a></li>
                            <li class=""><a href="#product_images" data-toggle="tab">Hình ảnh</a></li>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="product_general">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="form1" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tên sản phẩm(Việt) <span class="asterisk">*</span>
                                                </label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" value="Product 1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tên sản phẩm(Anh) <span class="asterisk">*</span>
                                                </label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" value="Product 1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Mô tả chi tiết(Việt)<span class="asterisk">*</span>
                                                </label>
                                                <div class="col-sm-7">
                                                    <textarea rows="6" class="form-control" placeholder="Chi tiết kỹ thuật"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Mô tả chi tiết(Anh)<span class="asterisk">*</span>
                                                </label>
                                                <div class="col-sm-7">
                                                    <textarea rows="6" class="form-control" placeholder="Chi tiết kỹ thuật"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Giới thiệu sản phẩm(Việt)</label>
                                                <div class="col-sm-7">
                                                    <textarea rows="4" class="form-control" placeholder="Tối đa 1000 ký tự..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Giới thiệu sản phẩm(Anh)</label>
                                                <div class="col-sm-7">
                                                    <textarea rows="4" class="form-control" placeholder="Tối đa 1000 ký tự..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Danh mục<span class="asterisk">*</span></label>
                                                <div class="col-sm-7">
                                                    <select class="form-control">
                                                        <option>Danh mục 1</option>
                                                        <option>Danh mục 2</option>
                                                        <option>Danh mục 3</option>
                                                        <option>Danh mục 4</option>
                                                        <option>Danh mục 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Giá tiền <span class="asterisk">*</span>
                                                </label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" placeholder="100000">
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_meta">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Meta Title(Việt)
                                                </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Tối đa 100 ký tự...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Meta Title(Anh)
                                                </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Tối đa 100 ký tự...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Meta Description(Việt)
                                                </label>
                                                <div class="col-sm-6">
                                                    <textarea rows="4" class="form-control" placeholder="Tối đa 1000 ký tự..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Meta Description(Anh)
                                                </label>
                                                <div class="col-sm-6">
                                                    <textarea rows="4" class="form-control" placeholder="Tối đa 1000 ký tự..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Meta Keywords(Việt)
                                                </label>
                                                <div class="col-sm-6">
                                                    <textarea rows="6" class="form-control" placeholder="Tối đa 200 ký tự..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Meta Keywords(Anh)
                                                </label>
                                                <div class="col-sm-6">
                                                    <textarea rows="6" class="form-control" placeholder="Tối đa 200 ký tự..."></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_images">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="product-review" class="table">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:100px"><strong>Hình</strong>
                                                        </th>
                                                        <th style="min-width:150px"><strong>Tên hình</strong>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width:20%">
                                                            <a href="#" class="magnific" title="Nature 1">
                                                                <img src="{{asset('/front/images/products/1.jpg')}}" alt="animal1" class="img-responsive">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control m-t-10" value="sản phẩm 1">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Xóa</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 m-t-20 m-b-40 align-center">
                        <a href="{{url('/admin/products')}}" class="btn btn-default m-r-10 m-t-10"><i class="fa fa-reply"></i> Hủy</a>
                        <a href="#" class="btn btn-danger m-r-10 m-t-10"><i class="fa fa-times"></i> Xóa Sản Phẩm</a>
                        <a href="#" class="btn btn-success m-t-10"><i class="fa fa-check"></i> Lưu Thay Đổi</a>
                    </div>
                </div>
            </div>
        </div>
        @stop