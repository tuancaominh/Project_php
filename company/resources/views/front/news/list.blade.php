@extends('front.layout.main')
@section('script_extend')

@endsection
@section('css_extend')
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/styles.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/styles2.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/styles3.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/styles4.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/fluidgrids.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/generic.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/peericons.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/peer_grid_italian.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/peer_layout_italian.css" media="all">
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/print.css" media="print">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/styles-ie.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/styles-ie7.css" media="all" />
        <![endif]-->
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="{{url('/front/news/css')}}/styles-ie8.css" media="all" />
        <![endif]-->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,100,200,300" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <style>
            .wrapper {
                background-color: #fff;
            }
        </style>
@endsection
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="main-container col2-right-layout">
            <div class="main container_12">
                <div class="breadcrumbs grid_full">
                    <ul>
                        <li class="home">
                            <a href="{{url('/')}}" title="Go to Home Page">Trang chủ</a>
                            <span class="fa fa-caret-right"></span>
                        </li>
                        <li class="blog">
                            <strong>Tin tức</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main grid_9 grid-col2-main">
                    <div class="page-title">
                        <h1>Tin tức</h1>
                    </div>
                    <div id="messages_product_view">
                    </div>
                    <div class="toolbar">
                        <div class="sorter">
                            <div class="limiter item-left">
                                <label>Hiển thị :</label>
                                <select onchange="setLocation(this.value)">
                                    <option value="#">
                                        10		
                                    </option>
                                </select>
                            </div>
                            <div class="pager item-right">
                                <p class="amount item-left">
                                    Showing 1-1 of 4 products			    
                                </p>
                                <div class="item-right">
                                    <div class="pages">
                                        <strong></strong>
                                        <ol>
                                            <li>
                                                <a class="next i-next" href="#" title="Next">
                                                <i class="fa fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="current">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li>
                                                <a class="next i-next" href="#" title="Next">
                                                <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <?php for($i=1; $i < 6; $i++){?>
                    <div class="postWrapper">
                        <div class="postContent peer-wrapper no-margin">
                            <div class="postTitle">
                                <h3><a href="{{url('/news/detail')}}/<?php echo $i;?>">Tin tức {{$i}}</a></h3>
                                <h4 class="below-heading">2016/04/26 10:00 AM</h4>
                            </div>
                            <div class="img-box">
                            <a href="{{url('/news/detail')}}/<?php echo $i;?>"><img src="http://www.peerforest.com/themes/rimbus/media/wysiwyg/block_banner/italian_demo/blog/blog_banner_mid1.jpg" alt="Blog Banner"></a></div>
                            <p>In porttitor magna eu lacus ullamcorper consequat. Praesent semper eros in lorem ultricies, at semper arcu eleifend. scele risque lectus at ultrices pellentesque...</p>
                            <a class="aw-blog-read-more" href="{{url('/news/detail')}}/<?php echo $i;?>">Xem thêm...</a>
                            <div class="postDetails">
                                Đăng bởi admin
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-right sidebar grid-col2-sidebar grid_3">
                    <div class="block block-blog">
                        <!--<div class="block-title">
                            <strong><span></span></strong>
                            </div>-->
                        @include('front.layout.news_list')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection