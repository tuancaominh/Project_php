@extends('layouts.dashboard')
@section('section')
<div class="col-sm-12">
    <div class="panel panel-default">	  
        <div class="panel-heading">
            <h3 class="panel-title">Danh Sách Sản Phẩm</h3>
        </div>		
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-b-20 clearfix">
                        <div class="pull-right">
                            <a href="{{url('/admin/products/edit')}}" class="btn btn-success m-t-10"><i class="fa fa-plus p-r-10"></i> Thêm mới sản phẩm</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="example1_length">
                                <label>Hiển thị
                                    <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    kết quả
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Địa Chỉ</th>
                                        <th style="width: 47px;">Sửa</th>
                                        <th style="width: 47px;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>john@gmail.com</td>
                                        <td>London, UK</td>
                                        <td><a href="{{ url ('admin/products/edit/1') }}"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a></td>
                                        <td><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Andy</td>
                                        <td>andygmail.com</td>
                                        <td>Merseyside, UK</td>
                                        <td><a href="{{ url ('admin/products/edit/2') }}"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a></td>
                                        <td><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Frank</td>
                                        <td>frank@gmail.com</td>
                                        <td>Southampton, UK</td>
                                        <td><a href="{{ url ('admin/products/edit/3') }}"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a></td>
                                        <td><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Hiển thị 1 đến 10 của 57 kết quả</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Trước</a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li>
                                    <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Sau</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>           
            </div>
        </div>
    </div>
</div>
@stop