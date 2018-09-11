@extends('layouts.dashboard', ['menu_flg' => true])
@section('page_heading','Danh sách menu')

@section('styles')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url('vendor/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">
  
<link href="{{ url('vendor/nestable/nestable.css') }}" rel="stylesheet">
</style>
@endsection

@section('scripts')
<script type="text/javascript">
        var root = '{{url("/")}}';
    </script>
    <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src='{{ url("vendor/selectize/js/standalone/selectize.min.js") }}'></script>
<script type="text/javascript" src="{{ url('vendor/nestable/jquery.nestable.js') }}"></script>

<script type="text/javascript">
$(function() {
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  $('.dd').nestable({ 
    dropCallback: function(details) {
       
       var order = new Array();
       $("li[data-id='"+details.destId +"']").find('ol:first').children().each(function(index,elem) {
         order[index] = $(elem).attr('data-id');
       });

       if (order.length === 0){
        var rootOrder = new Array();
        $("#nestable > ol > li").each(function(index,elem) {
          rootOrder[index] = $(elem).attr('data-id');
        });
       }

       $.post('{{url("admin/menu/")}}', 
        { source : details.sourceId, 
          destination: details.destId, 
          order:JSON.stringify(order),
          rootOrder:JSON.stringify(rootOrder) 
        }, 
        function(data) {
         // console.log('data '+data); 
        })
       .done(function() { 
          $( "#success-indicator" ).fadeIn(100).delay(1000).fadeOut();
       })
       .fail(function() {  })
       .always(function() {  });
     }
   });

  $('.delete_toggle').each(function(index,elem) {
      $(elem).click(function(e){
        e.preventDefault();
        $('#postvalue').attr('value',$(elem).attr('rel'));
        $('#deleteModal').modal('toggle');
      });
  });
});
</script>
@endsection

@section('section')
@yield('styles')
@yield('scripts')
  <div class="row">
    <div class="col-md-8">  
      <div class="well">
        <p class="lead"><a href="#newModal" class="btn btn-default pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> Tạo mới menu</a> Menu:</p>
        <div class="dd" id="nestable">
          {{ $menu }}
        </div>

        <p id="success-indicator" style="display:none; margin-right: 10px;">
          <span class="glyphicon glyphicon-ok"></span> Lưu thành công
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="well">
        <p>kéo thả để sắp xếp lại thứ tự menu</p>
        <p style="color: red;">CHÚ Ý: Hiện tại giao diện chỉ hỗ trợ menu 2 cấp</p>
      </div>
    </div>
  </div>

  <!-- Create new item Modal -->
   <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
        {{ Form::open(array('url'=>'admin/menu/new','class'=>'form-horizontal','role'=>'form'))}}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Tạo mới menu</h4>
          </div>
          <div class="modal-body">
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
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
           <button type="submit" class="btn btn-primary">Tạo mới</button>
         </div>
         {{ Form::close()}}
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
  
  <!-- Delete item Modal -->
   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
          {{ Form::open(array('url'=>'admin/menu/delete')) }}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Xóa menu</h4>
          </div>
          <div class="modal-body">
            <p>Xóa menu này ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
            <input type="hidden" name="delete_id" id="postvalue" value="" />
            <input type="submit" class="btn btn-danger" value="Xóa" />
          </div>
          {{ Form::close(); }}
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
@stop


