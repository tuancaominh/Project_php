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
            <h3 class="panel-title">Danh Sách Liên Hệ</h3>
        </div>		
        <div class="panel-body">
            <div class="row">  
                <div class="col-sm-12">
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
                                         <th>Điện Thoại</th>
                                         <th>Email</th>
                                        <th>Nội Dung</th>                                       
                                        <th style="width: 47px;">Chi Tiết</th>
                                        <th style="width: 47px;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                    <tr class="success">
                                        <td>{{stripslashes($contact->name)}}</td>
                                        <td>{{stripslashes($contact->tel)}}</td>
                                        <td>{{stripslashes($contact->email)}}</td>
                                        <td>{{stripslashes($contact->content)}}</td>
                                        <td><a href="{{ url ('admin/contact/detail/'.$contact->id) }}"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a></td>
                                        <td><button type="button" id="button-delete-{{$contact->id}}" class="btn btn-warning btn-circle btn-delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-times"></i></button></td>
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
                                    Bạn có Muốn Xóa Liên Hệ Này?                      
                                </div>
                                <div class="modal-footer">
                                    {{Form::open(array('url' => 'admin/contact/delete', 'method' => 'post')) }}
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
                                {{ $contacts->render() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</div>
@stop