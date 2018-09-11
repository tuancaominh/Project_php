<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url("/")}}">
                <h1>{{trans('label.frontend.header.page_title')}}</h1>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">{{trans('label.frontend.header.home_page')}}</a></li>
                <li><a href="{{url('about')}}">{{trans('label.frontend.header.about')}}</a></li>
                <li><a href="{{url('/service')}}">{{trans('label.frontend.header.service')}}</a></li>
                <li><a href="{{url('/contact')}}">{{trans('label.frontend.header.contact')}}</a></li>
                <li><a href="{{url('news/list')}}">{{trans('label.frontend.header.news')}}</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{trans('label.frontend.header.product')}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('product/list')}}">Đá Granite</a></li>
                        <li><a href="{{url('product/list')}}">Đá Marble</a></li>
                        <li><a href="{{url('product/list')}}">Hoa Văn</a></li>
                        <li><a href="{{url('product/list')}}">Bột Đá</a></li>
                        <li><a href="{{url('product/list')}}">Sản Phẩm Tiêu Biểu</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{trans('label.frontend.header.language')}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/language')}}/vi" style="text-align: left;"><img src="{{asset('front/images/icon')}}/vn_flg.png"  style="width: 30px; height: 20px; float: left; margin-right: 2px;"/>{{trans('label.frontend.header.vi_flg')}}</a></li>
                        <li><a href="{{url('/language')}}/en" style="text-align: left;"><img src="{{asset('front/images/icon')}}/en_flg.jpg"  style="width: 30px; height: 20px; float: left; margin-right: 2px;"/>{{trans('label.frontend.header.en_flg')}}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>