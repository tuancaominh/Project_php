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
                            <a href="{{url('/news/list')}}" title="Return to Blog">Tin tức</a>
                            <span class="fa fa-caret-right"></span>
                        </li>
                        <li class="blog_page">
                            <strong>Tin tức 1</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main grid_9 grid-col2-main">
                    <div class="page-title">
                        <h1>Tin tức</h1>
                    </div>
                    <div id="messages_product_view"></div>
                    <div class="postWrapper">
                        <div class="postTitle">
                            <h3>Tin tức 1</h3>
                            <h4 class="below-heading">2016/04/26 10:00 AM</h4>
                        </div>
                        <div class="postContent">
                            <div class="center-block marbot30"><img src="http://www.peerforest.com/themes/rimbus/media/wysiwyg/block_banner/category_banner/banner-cate1.jpg" alt="Custom Banner"></div>
                            <div class="peer-wrapper">
                                <div class="img-box"><img src="http://www.peerforest.com/themes/rimbus/media/wysiwyg/block_banner/italian_demo/custom_banner.jpg" alt="Custom Banner"></div>
                                <h3>Sub Title</h3>
                                <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
                                <p>Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. Mauris accumsan nulla vel diam.</p>
                                <p>Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante isque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla.</p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                            <div class="peer-wrapper right">
                                <div class="img-box"><img src="http://www.peerforest.com/themes/rimbus/media/wysiwyg/block_banner/italian_demo/custom_banner.jpg" alt="Custom Banner"></div>
                                <h3>Sub Title</h3>
                                <strong class="content">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla.</strong> <br> <br>
                                <p>Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. Mauris accumsan nulla vel diam.</p>
                                <p>Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante isque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var contactForm = new VarienForm('postComment', false);
                    </script>
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