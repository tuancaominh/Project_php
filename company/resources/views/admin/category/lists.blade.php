@extends ('layouts.dashboard')
@section('section')
@if (session('successedit'))
<div class="alert alert-success  alert-dismissable " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Sửa Danh Mục Thành Công
</div>
@endif
@if (session('successdelete'))
<div class="alert alert-success  alert-dismissable " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Xóa Danh Mục Thành Công
</div>
@endif
<div class="col-sm-12">
    <div class="panel panel-default">	  
        <div class="panel-heading">
            <h3 class="panel-title">Danh Sách Danh Mục</h3>
        </div>		
        <div class="panel-body">
            <div class="row">  
                <div class="col-sm-12">
                    <div class="m-b-20 clearfix">
                        <div class="pull-right">
                            <a href="{{ url ('admin/category/create')}}" class="btn btn-success m-t-10"><i class="fa fa-plus p-r-10"></i> Thêm mới Danh Mục</a>
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
                                        <th>Tên(Việt)</th>
                                        <th>Chi Tiết(Việt)</th>
                                        <th>Tên (Anh)</th>
                                        <th>Chi Tiết(Anh)</th>
                                        <th style="width: 47px;">Sửa</th>
                                        <th style="width: 47px;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorys as $category)
                                    <tr class="success">
                                        <td>{{stripslashes($category->name)}}</td>
                                        <td>{{stripslashes($category->description)}}</td>
                                        <td>{{stripslashes($category->name_en)}}</td>
                                        <td>{{stripslashes($category->description_en)}}</td>
                                        <td><a href="{{ url ('admin/category/edit/'.$category->id) }}"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a></td>
                                        <td><button type="button" id="button-delete-{{$category->id}}" class="btn btn-warning btn-circle btn-delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                    @endforeach                                   
                                </tbody>
                            </table>
                        </div>
                    </div>               
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Xóa Danh Mục</h4>
                                </div>
                                <div class="modal-body">
                                    Bạn có Muốn Xóa Danh Mục Này?                      
                                </div>
                                <div class="modal-footer">
                                    {{Form::open(array('url' => 'admin/category/delete', 'method' => 'post')) }}
                                    <input  name="id" type="hidden" placeholder="" id="txt-delete">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-primary">Xóa</button>
                                    {{ Form::close() }}
                                </div>                             
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src='{{ asset("js/jquery-2.2.3.js") }}'></script>
                    <script type="text/javascript">
                            $(function () {
                                $('.btn-delete').click(function () {
                                    var value=$(this).attr('id');
                                    $("#txt-delete").val(value.split("-")[2]);
                                });
                            });                     
                    </script>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Hiển thị 1 đến 10 của 57 kết quả</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                {{ $categorys->render() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</div>
@stop