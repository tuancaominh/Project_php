@extends('front.layout.main')
@section('script_extend')

@endsection
@section('css_extend')

<link rel="stylesheet" href="{{ asset('/front/product/bootstrap_product.min.css')}}">
        
@endsection
@section('content')
<div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        <div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        <noscript>&amp;lt;meta HTTP-EQUIV="refresh" content="0;url='{{url('/product/detail/1')}}&amp;amp;amp;PageSpeed=noscript'" /&amp;gt;&amp;lt;style&amp;gt;&amp;lt;!--table,div,span,font,p{display:none} --&amp;gt;&amp;lt;/style&amp;gt;&amp;lt;div style="display:block"&amp;gt;Please click &amp;lt;a href="{{url('/product/detail/1')}}&amp;amp;amp;PageSpeed=noscript"&amp;gt;here&amp;lt;/a&amp;gt; if you are not redirected within a few seconds.&amp;lt;/div&amp;gt;</noscript>
        <div id="wrapper" class="rimbus">
            <div class="breadcrumb">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <ul class="list-inline list-unstyled">
                            <li><a href="{{url('/product/detail/1')}}#">Home</a></li>
                            <li><a href="{{url('/product/detail/1')}}#">Womens</a> </li>
                            <li class="active">Product Name #01</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="body-content details-v1">
                <div class="container">
                    <div class="row">
                        @include('front.layout.product_category')
                        <div class="col-md-9 details-page">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
								    <div class="product-item-holder size-big single-product-gallery small-gallery">
								        <div id="owl-single-product" class="owl-carousel owl-theme owl-loaded">
								            <div class="owl-stage-outer">
								                <div class="owl-stage" style="transform: translate3d(-336px, 0px, 0px); transition: 0.25s; width: 3024px;">
								                    <div class="owl-item active" style="width: 336px; margin-right: 0px;"><div class="single-product-gallery-item" id="slide2"> </div></div>
								                    <div class="owl-item" style="width: 336px; margin-right: 0px;">
								                        <div class="single-product-gallery-item" id="slide3"><img src="{{url('/front/images/products')}}/18.jpg" class="img-responsive" alt="" > </div>
								                    </div>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>
                                <div class="col-md-7 col-sm-6 wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="product-name">
                                        <h3>product name #01</h3>
                                    </div>
                                    
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labo re et dolore magna aliqua. Ut enim ad minim venia. Lore m ipsum dolor sit amet, conse ctetur adi piscing elit, sed do eiusmod tempors incididunt ut labore et dolore magna aliqua. </p>
                                    </div>
                                    <div class="details-product-price"> <ins class="amount">$300.00</ins> <del class="amount">$360.00</del> </div>
                                    
                                </div>
                                <div class="col-md-12 col-sm-12 outer-top-vs">
                                    <div class="product-info-panel wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="{{url('/product/detail/1')}}#description" aria-controls="description" role="tab" data-toggle="tab">description</a></li>
                                            
                                            <li role="presentation"><a href="{{url('/product/detail/1')}}#product-tags" aria-controls="product-tags" role="tab" data-toggle="tab">product tags</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="description">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et massa consectetur, posuere dolor non, varius lorem. Aenean eu tempor lorem, ac consequat dui. Ut placerat risus et rutrum digniss im. Pellentesque volutpat mi et augue imperdiet pellentesque. Praesent ac lorem fringilla, congue sem at, dapibus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget enim. Praesent et massa consectetur, posuere dolor non, varius lorem. <br> <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et massa consectetur, posuere dolor non, varius lorem. Aenean eu tempor lorem, ac consequat dui. Ut placerat risus et rutrum digniss im. Pellentesque volutpat mi et augue imperdiet pellentesque. Praesent ac lorem fringilla, congue sem at, dapibus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget enim. Praesent et massa consectetur, posuere dolor non, varius lorem. Aenean eu tempor lorem, ac consequat dui.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="product-tags">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et massa consectetur, posuere dolor non, varius lorem. Aenean eu tempor lorem, ac consequat dui. Ut placerat risus et rutrum digniss im. Pellentesque volutpat mi et augue imperdiet pellentesque. Praesent ac lorem fringilla, congue sem at, dapibus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget enim. Praesent et massa consectetur, posuere dolor non, varius lorem. <br> <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et massa consectetur, posuere dolor non, varius lorem. Aenean eu tempor lorem, ac consequat dui. Ut placerat risus et rutrum digniss im. Pellentesque volutpat mi et augue imperdiet pellentesque. Praesent ac lorem fringilla, congue sem at, dapibus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibendum feugiat ut eget enim. Praesent et massa consectetur, posuere dolor non, varius lorem. Aenean eu tempor lorem, ac consequat dui.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="up-sell-products wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                <h3 class="section-title">Weekly featured</h3>
                                <div class="featured-product owl-carousel owl-theme owl-loaded">
                                    
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage" style="transform: translate3d(-878px, 0px, 0px); transition: 0s; width: 4390px;">
                                                        <div class="owl-item cloned" style="width: 189.5px; margin-right: 30px;">
                                                            
                                                        </div>
                                                        <div class="owl-item cloned" style="width: 189.5px; margin-right: 30px;">
                                                            
                                                        </div>
                                                        <div class="owl-item cloned" style="width: 189.5px; margin-right: 30px;">
                                                            
                                                        </div>
                                                        <div class="owl-item cloned" style="width: 189.5px; margin-right: 30px;">
                                                            
                                                        </div>
                                                        <?php for($i=1; $i <5; $i ++){?>
                                                        <div class="owl-item active" style="width: 189.5px; margin-right: 30px;">
                                                            <div class="item category-product">
                                                                <div class="products grid-v1 wow fadeInUp animated animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                                                    <div class="product">
                                                                        <div class="product-image">
                                                                            <a href="{{url('/product/detail')}}/<?php echo $i;?>" data-lightbox="image-1">
                                                                                <div class="image"> <img src="{{url('/front/images/products')}}/117.jpg" class="img-responsive" alt=""  > </div>
                                                                                <div class="tag">
                                                                                    <div class="tag-text new">new</div>
                                                                                </div>
                                                                                <div class="hover-effect"><i class="fa fa-search"></i></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-info">
                                                                            <h3 class="name"><a href="{{url('/product/detail/1')}}">Product name <?php echo $i;?></a></h3>
                                                                            <div class="product-price"> <ins> <span class="amount">$ 369.99</span> </ins> <del><span class="amount">$ 400.99</span></del> </div>
                                                                        </div>
                                                                        <div class="cart animate-effect">
                                                                            <div class="action">
                                                                                <ul class="list-unstyled">
                                                                                    <li class="add-cart-button"> <a class="btn btn-primary" href="{{url('/product/detail/1')}}">Add to cart</a> </li>
                                                                                    <li> <a class="btn btn-primary whislist" href="{{url('/product/detail/1')}}#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                                    <li> <a class="btn btn-primary compare" href="{{url('/product/detail/1')}}#" title="Compare"> <i class="fa fa-exchange"></i> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
