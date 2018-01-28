@extends('layouts.master')
@section('title', 'this is dynamic title')


@section('sidebar')
    @include('etc.category')

    <div class="bt-box box-special">
        <div class="box-heading">
            <h1>Today's Deals</h1>
        </div>
        <div class="box-content">
            <div class="list-product" id="product_special_0">
                <div class="item product-thumb">
                    <div class="image">
                        <a href="product-detail.html"><img src="images/product/p16-268x268.jpg" alt="nexafed " title="nexafed " class="img-responsive" />
                        </a>
                    </div>
                    <div class="caption">
                        <div class="name"><a title="nexafed " href="product-detail.html">nexafed </a>
                        </div>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <p class="price"> $200.00 </p>
                        <div class="button-group">
                            <button class="btn-cart" type="button">Add to Cart</button>
                            </div>
                    </div>
                </div><!-- /.item -->
                <div class="item product-thumb">
                    <div class="image">
                        <a href="product-detail.html"><img src="images/product/p21-268x268.jpg" alt="duodart" title="duodart" class="img-responsive" />
                        </a>
                        <div class="label-discount"> <span>15%</span> </div>
                    </div>
                    <div class="caption">
                        <div class="name"><a title="duodart" href="product-detail.html">duodart</a>
                        </div>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <p class="price"> <span class="price-old">$122.00</span><span class="price-new">$104.00</span> </p>
                        <div class="button-group">
                            <button class="btn-cart" type="button">Add to Cart</button>
                            </div>
                    </div>
                </div><!-- /.item -->
                <div class="item product-thumb">
                    <div class="image">
                        <a href="product-detail.html"><img src="images/product/p17-268x268.jpg" alt="kre-alkalyn" title="kre-alkalyn" class="img-responsive" />
                        </a>
                    </div>
                    <div class="caption">
                        <div class="name"><a title="kre-alkalyn" href="product-detail.html">kre-alkalyn</a>
                        </div>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <p class="price"> $122.00 </p>
                        <div class="button-group">
                            <button class="btn-cart" type="button">Add to Cart</button>
                            </div>
                    </div>
                </div><!-- /.item -->
                <div class="item product-thumb">
                    <div class="image">
                        <a href="product-detail.html"><img src="images/product/p9-268x268.jpg" alt="Andrew Carnegie" title="Andrew Carnegie" class="img-responsive" />
                        </a>
                    </div>
                    <div class="caption">
                        <div class="name"><a title="Andrew Carnegie" href="product-detail.html">Andrew Carnegie</a>
                        </div>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <p class="price"> $122.00 </p>
                        <div class="button-group">
                            <button class="btn-cart" type="button">Add to Cart</button>
                            </div>
                    </div>
                </div><!-- /.item -->
                <div class="item product-thumb">
                    <div class="image">
                        <a href="product-detail.html"><img src="images/product/p15-268x268.jpg" alt="Lithium aspartate" title="Lithium aspartate" class="img-responsive" />
                        </a>
                    </div>
                    <div class="caption">
                        <div class="name"><a title="Lithium aspartate" href="product-detail.html">Lithium aspartate</a>
                        </div>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <p class="price"> $122.00 </p>
                        <div class="button-group">
                            <button class="btn-cart" type="button">Add to Cart</button>
                            </div>
                    </div>
                </div><!-- /.item -->
            </div>
            <div class="carousel-button"> <a id="prev_special_0" class="prev nav_thumb" href="javascript:void(0)" title="prev"><i class="fa fa-angle-left"></i></a> <a id="next_special_0" class="next nav_thumb" href="javascript:void(0)" title="next"><i class="fa fa-angle-right"></i></a> </div>
        </div><!-- /.box-content -->
    </div><!-- /.bt-box -->

    <div class="bt-staticblock-college">
        <a href="#"><img src="images/banner/banner_home_left1.jpg" title="banner" alt="banner">
        </a>
        <div class="text-info"> <span class="small-text text-1">College bound?</span> <span class="large-text">Save 15%</span> <span class="small-text text-2">There are many variations</span> <a href="#" class="btn-shopnow">Shop Now</a> </div>
    </div><!-- /.bt-staticblock-college -->

    <div class="boss-testimonial" id="boss_testimonial_min_height_0">
        <div class="box-heading title">
            <h1>Testimonials</h1>
        </div>
        <div class="box-content">
            <div class="testimonial-content" id="testimonial-content0">
                <div id="boss_testimonial_0">
                    <div class="testimonial-item">
                        <div class="testimonial-image"> <img alt="author" src="images/author_1.jpg" /> </div>
                        <div class="testimonial-message">
                            <p>Proin commodo laoreet nisl eu pellentesque. Donec vel nunc magna. Donec enim nunc, venenatis eu luctus pellentesque, rutrum nec purus. Ut quis nibh <a href="#" title="More...">...</a>
                            </p>
                        </div>
                        <div class="testimonial-name"> Zone </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-image"> <img alt="author" src="images/author_2.jpg" /> </div>
                        <div class="testimonial-message">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the mome <a href="#" title="More...">...</a>
                            </p>
                        </div>
                        <div class="testimonial-name"> John Doe </div>
                    </div>
                </div>
            </div> <a id="prev_testimonial_0" class="btn-nav-center prev nav_thumb" href="javascript:void(0)" title="prev"><i class="fa fa-angle-left"></i></a> <a id="next_testimonial_0" class="btn-nav-center next nav_thumb" href="javascript:void(0)" title="next"><i class="fa fa-angle-right"></i></a> </div>
    </div><!-- /.boss-testimonial -->

    <!--module boss - fillter product-->
    <div class="boss-filter-container">
        <div id="boss_homefilter_tabs0" class="boss_homefilter_tabs">
            <div id="tabs_container0" class="hide-on-mobile tabs_container"> </div>
            <div id="tabs_content_container0" class="home_filter_content tabs_content_container">
                <div class="box-heading title">
                    <h1>Best Products</h1>
                </div>
                <div class="box-content">
                    <div id="content_tab00" class="content_tabs0 list_carousel responsive column-noimage" style="display:block">
                        <ul id="carousel_tab00" data-prev="#prev_tab00" data-next="#next_tab00" class="box-product">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a class="" data-id="42" href="product-detail.html"><img src="images/product/p2-81x81.jpg" alt="Baby Bottle" title="Baby Bottle" />
                                        </a>
                                    </div>
                                    <div class="small_detail">
                                        <div class="name"><a href="product-detail.html">Baby Bottle</a>
                                        </div>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <div class="price"> $122.00 </div>
                                        <div class="button-group">
                                            <button class="btn-cart" type="button">Add to Cart</button>
                                            <div class="wishlist-compare">
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </button>
                                                <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_btn_icon">
                                        <div class="description">
                                            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec </p>
                                        </div>
                                        <div class="cart"> <a class="btn btn-cart" title="Add to Cart"><span>Add to Cart</span></a> <a class="btn btn-shopping" title="Detail" href="product-detail.html"><span>Detail</span></a> </div>
                                        <div class="compare"><a class="action-button" title="Compare this Product"><span>Compare this Product</span></a>
                                        </div>
                                        <div class="wishlist"><a class="action-button" title="Add to Wish List"><span>Add to Wish List</span></a>
                                        </div>
                                    </div>
                                </div><!-- /.product-thumb -->
                                <div class="product-thumb">
                                    <div class="image">
                                        <a class="" data-id="32" href="product-detail.html"><img src="images/product/p22-81x81.jpg" alt="OxyELITE pro" title="OxyELITE pro" />
                                        </a>
                                    </div>
                                    <div class="small_detail">
                                        <div class="name"><a href="product-detail.html">OxyELITE pro</a>
                                        </div>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <div class="price"> $122.00 </div>
                                        <div class="button-group">
                                            <button class="btn-cart" type="button">Add to Cart</button>
                                            <div class="wishlist-compare">
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </button>
                                                <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_btn_icon">
                                        <div class="description">
                                            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh</p>
                                        </div>
                                        <div class="cart"> <a class="btn btn-cart" title="Add to Cart"><span>Add to Cart</span></a> <a class="btn btn-shopping" title="Detail" href="product-detail.html"><span>Detail</span></a> </div>
                                        <div class="compare"><a class="action-button" title="Compare this Product"><span>Compare this Product</span></a>
                                        </div>
                                        <div class="wishlist"><a class="action-button" title="Add to Wish List"><span>Add to Wish List</span></a>
                                        </div>
                                    </div>
                                </div><!-- /.product-thumb -->
                                <div class="product-thumb">
                                    <div class="image">
                                        <a class="" data-id="35" href="product-detail.html"><img src="images/product/p12-81x81.jpg" alt="Emetrol" title="Emetrol" />
                                        </a>
                                    </div>
                                    <div class="small_detail">
                                        <div class="name"><a href="product-detail.html">Emetrol</a>
                                        </div>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <div class="price"> $122.00 </div>
                                        <div class="button-group">
                                            <button class="btn-cart" type="button">Add to Cart</button>
                                            <div class="wishlist-compare">
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </button>
                                                <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_btn_icon">
                                        <div class="description">
                                            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec </p>
                                        </div>
                                        <div class="cart"> <a class="btn btn-cart" title="Add to Cart"><span>Add to Cart</span></a> <a class="btn btn-shopping" title="Detail" href="product-detail.html"><span>Detail</span></a> </div>
                                        <div class="compare"><a class="action-button" title="Compare this Product"><span>Compare this Product</span></a>
                                        </div>
                                        <div class="wishlist"><a class="action-button" title="Add to Wish List"><span>Add to Wish List</span></a>
                                        </div>
                                    </div>
                                </div><!-- /.product-thumb -->
                                <div class="product-thumb">
                                    <div class="image">
                                        <a class="" data-id="47" href="product-detail.html"><img src="images/product/p21-81x81.jpg" alt="duodart" title="duodart" />
                                        </a>
                                    </div>
                                    <div class="small_detail">
                                        <div class="name"><a href="product-detail.html">duodart</a>
                                        </div>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <div class="price"> <span class="price-old">$122.00</span> <span class="price-new">$104.00</span> </div>
                                        <div class="button-group">
                                            <button class="btn-cart" type="button">Add to Cart</button>
                                            <div class="wishlist-compare">
                                                <button class="btn-wishlist" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i>
                                                </button>
                                                <button class="btn-compare" type="button" title="Compare this Product" ><i class="fa fa-retweet"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_btn_icon">
                                        <div class="description">
                                            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec </p>
                                        </div>
                                        <div class="cart"> <a class="btn btn-cart" title="Add to Cart"><span>Add to Cart</span></a> <a class="btn btn-shopping" title="Detail" href="product-detail.html"><span>Detail</span></a> </div>
                                        <div class="compare"><a class="action-button" title="Compare this Product" ><span>Compare this Product</span></a>
                                        </div>
                                        <div class="wishlist"><a class="action-button" title="Add to Wish List" ><span>Add to Wish List</span></a>
                                        </div>
                                    </div>
                                </div><!-- /.product-thumb -->
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div><!-- /.box-content -->
            </div>
        </div>
    </div><!-- /.boss-filter-container -->
    <div class="bt-staticblock-babyneeds">
        <a href="#"><img src="images/banner/banner_home_left2.jpg" title="banner" alt="banner">
        </a>
        <div class="text-info"> <span class="small-text">25 Products</span> <span class="large-text">Baby Needs</span> <a href="#" class="btn-shopnow">Shop Now</a> </div>
    </div><!-- /.bt-staticblock-babyneeds -->
    <div class="bt-staticblock-diet">
        <a href="#"><img src="images/banner/banner_home_left3.jpg" title="banner" alt="banner">
        </a>
        <div class="text-info"> <span class="small-text">07 Products</span> <span class="large-text">Diet &amp; Fitness</span> <a href="#" class="btn-shopnow">Shop Now</a> </div>
    </div><!-- /.bt-staticblock-diet -->
@endsection


@section('content')
    <div class="header_slider">
        <article class="boss_slider" style="max-width:870px;">
            <div class="tp-banner-container">
                <div class="tp-banner tp-banner0">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-link="#" data-target="_self" data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                            <!-- MAIN IMAGE --><img src="images/dummy.png" alt="slidebg1" data-lazyload="images/slide/slide1.jpg" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption medium_white sft customout rs-parallaxlevel-0" data-x="379" data-y="56" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="350" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Believe in We </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption bold_green_text sft customout rs-parallaxlevel-0" data-x="268" data-y="75" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="1000" data-end="5000" data-endspeed="400" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> DrugStore </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption large_white_text sft customout rs-parallaxlevel-0" data-x="361" data-y="213" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="2000" data-end="5000" data-endspeed="400" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> shop now &#33; </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption medium_white sft customout rs-parallaxlevel-0" data-x="283" data-y="168" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="1500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Because Your Life Matters Microloans </div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption big_white sft customout rs-parallaxlevel-0" data-x="342" data-y="54" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="images/dummy.png" alt="" data-lazyload="images/slide/line_caption.png" /> </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption big_white sft customout rs-parallaxlevel-0" data-x="499" data-y="54" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="images/dummy.png" alt="" data-lazyload="images/slide/line_caption.png" /> </div>
                        </li>
                        <li data-link="#" data-target="_self" data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                            <!-- MAIN IMAGE --><img src="images/dummy.png" alt="slidebg1" data-lazyload="images/slide/slide2.jpg" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption medium_black sfr customout rs-parallaxlevel-0" data-x="634" data-y="34" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Up to </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption bold_green_text sfr customout rs-parallaxlevel-0" data-x="527" data-y="54" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="1000" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> 15% off </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption medium_text sfr customout rs-parallaxlevel-0" data-x="590" data-y="223" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="2000" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> shop now &#33; </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption big_black sfr customout rs-parallaxlevel-0" data-x="587" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="1500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> everything </div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption medium_black sfr customout rs-parallaxlevel-0" data-x="515" data-y="175" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="1700" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Amazing Things Are Happening Here </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption big_white sfr customout rs-parallaxlevel-0" data-x="598" data-y="32" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="images/dummy.png" alt="" data-lazyload="images/slide/line_caption1.png" /> </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption big_white sfr customout rs-parallaxlevel-0" data-x="683" data-y="32" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="images/dummy.png" alt="" data-lazyload="images/slide/line_caption1.png" /> </div>
                        </li>
                    </ul>
                    <div class="slideshow_control"></div>
                </div>
            </div>
        </article>
    </div><!-- /.header_slider -->

    <div class="bt-staticblock-shopnow">
        <div class="bt-item-left">
            <div class="bt-banner-item">
                <div class="bt-banner-image">
                    <a href="#"><img src="images/banner/banner_home1.jpg" alt="banner"> </a>
                </div>
                <div class="bt-banner-title">
                    <p>Up to</p>
                    <h3>25% off</h3>
                    <h4>on wide range of selected products</h4> <a href="#" class="btn-shopnow">shop now</a> </div>
            </div>
        </div>
        <div class="bt-item-right">
            <div class="bt-banner-item">
                <div class="bt-banner-image">
                    <a href="#"><img src="images/banner/banner_home2.jpg" alt="banner"> </a>
                </div>
                <div class="bt-banner-title">
                    <h2>Better for you</h2>
                    <p><b>Compassion - Innovation - Trust.</b>
                    </p>
                    <p>Women's rights democracy cornerstone assistance</p> <a href="#" class="btn-shopnow">shop now</a> </div>
            </div>
        </div>
    </div><!-- /.bt-staticblock-shopnow -->
    <div class="bt-featured-pro bt-nprolarge-slider vaccines" id="bt_fea_pro_0">
        <div class="box-heading title">
            <h1>Vaccines, Blood &amp; Biologics</h1>
        </div>
        <div class="box-content bt-product-content">
            <div class="bt-items bt-product-grid">
                <div id="boss_featured_0">
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p2-268x268.jpg" alt="Baby Bottle" title="Baby Bottle" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Baby Bottle</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p22-268x268.jpg" alt="OxyELITE pro" title="OxyELITE pro" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">OxyELITE pro</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p12-268x268.jpg" alt="Emetrol" title="Emetrol" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Emetrol</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p21-268x268.jpg" alt="duodart" title="duodart" class="img-responsive" />
                                </a>
                                <div class="label-discount"> <span>15%</span> </div>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">duodart</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> <span class="price-old">$122.00</span> <span class="price-new">$104.00</span> </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product" ><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Sirup Water Babies" title="Sirup Water Babies" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Sirup Water Babies</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p16-268x268.jpg" alt="nexafed " title="nexafed " class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">nexafed </a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $200.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product" ><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p20-268x268.jpg" alt="fentora" title="fentora" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">fentora</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> </div>
                                    <p class="price"> $241.99 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p8-268x268.jpg" alt="Comotomo" title="Comotomo" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Comotomo</a>
                                    </div>
                                    <p class="price"> $337.99 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p5-268x268.jpg" alt="Dermalogica" title="Dermalogica" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Dermalogica</a>
                                    </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                </div>
                <div class="clearfix"></div> <a id="prev_featured_0" class="prev nav_thumb" href="javascript:void(0)" title="prev"><i class="fa fa-angle-left"></i></a> <a id="next_featured_0" class="next nav_thumb" href="javascript:void(0)" title="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div><!-- /.box-content -->
    </div><!-- /.bt-featured-pro -->
    <div class="bt-featured-pro bt-nprolarge-slider cosmetics" id="bt_fea_pro_1">
        <div class="box-heading title">
            <h1>Cosmetics</h1>
        </div>
        <div class="box-content bt-product-content">
            <div class="bt-items bt-product-grid">
                <div id="boss_featured_1">
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p2-268x268.jpg" alt="Baby Bottle" title="Baby Bottle" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Baby Bottle</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p22-268x268.jpg" alt="OxyELITE pro" title="OxyELITE pro" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">OxyELITE pro</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p12-268x268.jpg" alt="Emetrol" title="Emetrol" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Emetrol</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p21-268x268.jpg" alt="duodart" title="duodart" class="img-responsive" />
                                </a>
                                <div class="label-discount"> <span>15%</span> </div>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">duodart</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> <span class="price-old">$122.00</span> <span class="price-new">$104.00</span> </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product" ><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Sirup Water Babies" title="Sirup Water Babies" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Sirup Water Babies</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p16-268x268.jpg" alt="nexafed " title="nexafed " class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">nexafed </a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $200.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product" ><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p20-268x268.jpg" alt="fentora" title="fentora" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">fentora</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> </div>
                                    <p class="price"> $241.99 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p8-268x268.jpg" alt="Comotomo" title="Comotomo" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Comotomo</a>
                                    </div>
                                    <p class="price"> $337.99 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p5-268x268.jpg" alt="Dermalogica" title="Dermalogica" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Dermalogica</a>
                                    </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                </div>
                <div class="clearfix"></div> <a id="prev_featured_1" class="prev nav_thumb" href="javascript:void(0)" title="prev"><i class="fa fa-angle-left"></i></a> <a id="next_featured_1" class="next nav_thumb" href="javascript:void(0)" title="next"><i class="fa fa-angle-right"></i></a> </div>
        </div><!-- /.box-content -->
    </div><!-- /.bt-featured-pro -->
    <div class="bt-statickblock-learmore">
        <div class="bt-banner-image">
            <a href="#"><img src="images/banner/banner_big_home.png" alt="banner">
            </a>
        </div>
        <div class="bt-banner-title">
            <h2>DrugStore. Every Patient. Every Time.</h2>
            <p>Save lives, resolve; change movements fairness globalization <a href="#">Learn More</a>
            </p>
        </div>
    </div><!-- /.bt-statickblock-learmore -->
    <div class="bt-featured-pro bt-nprolarge-slider vitamins" id="bt_fea_pro_2">
        <div class="box-heading title">
            <h1>Vitamins &amp; Supplements</h1>
        </div>
        <div class="box-content bt-product-content">
            <div class="bt-items bt-product-grid">
                <div id="boss_featured_2">
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p20-268x268.jpg" alt="fentora" title="fentora" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">fentora</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> </div>
                                    <p class="price"> $241.99 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p5-268x268.jpg" alt="Dermalogica" title="Dermalogica" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">Dermalogica</a>
                                    </div>
                                    <p class="price"> $122.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p21-268x268.jpg" alt="duodart" title="duodart" class="img-responsive" />
                                </a>
                                <div class="label-discount"> <span>15%</span> </div>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">duodart</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> <span class="price-old">$122.00</span> <span class="price-new">$104.00</span> </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product" ><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p6-268x268.jpg" alt="DNA Paternity Test" title="DNA Paternity Test" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">DNA Paternity Test</a>
                                    </div>
                                    <p class="price"> $1,202.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout odd element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p16-268x268.jpg" alt="nexafed " title="nexafed " class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">nexafed </a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $200.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product" ><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                    <div class="bt-item-extra product-layout even element-3">
                        <section class="product-thumb bt-item transition">
                            <div class="image">
                                <a href="product-detail.html"><img src="images/product/p3-268x268.jpg" alt="St. Tropez" title="St. Tropez" class="img-responsive" />
                                </a>
                                <!--<span></span>-->
                            </div>
                            <div class="small_detail">
                                <div class="caption">
                                    <div class="name"><a href="product-detail.html">St. Tropez</a>
                                    </div>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <p class="price"> $1,202.00 </p>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button">Add to Cart</button>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.bt-item-extra -->
                </div>
                <div class="clearfix"></div> <a id="prev_featured_2" class="prev nav_thumb" href="javascript:void(0)" title="prev"><i class="fa fa-angle-left"></i></a> <a id="next_featured_2" class="next nav_thumb" href="javascript:void(0)" title="next"><i class="fa fa-angle-right"></i></a> </div>
        </div><!-- /.box-content -->
    </div><!-- /.bt-featured-pro -->

    <div class="bt-service">
        <div class="box-heading title">
            <h1> <i class="fa fa-star"></i> Services</h1> </div>
        <div class="box-content">
            <div class="row">
                <div class="bt-service-items col-sm-4 col-xs-12">
                    <div class="bt-service-content"> <a class="bt-service-icon" href="#"><i class="fa fa-paper-plane-o"></i></a>
                        <h2>FAST &amp; FREE DELIVERY </h2>
                        <p>Rockefeller Jane Addams, meaningful combat malaria. Rights-based approach.</p> <a class="btn" href="#">Read More</a> </div>
                </div>
                <div class="bt-service-items col-sm-4 col-xs-12">
                    <div class="bt-service-content"> <a class="bt-service-icon" href="#"><i class="fa fa-thumbs-o-up"></i></a>
                        <h2>THE HIGHEST PRODUCT QUALITY</h2>
                        <p>Human experience treatment catalyst; innovation fight against malnutrition, expanding.</p> <a class="btn" href="#">Read More</a> </div>
                </div>
                <div class="bt-service-items col-sm-4 col-xs-12">
                    <div class="bt-service-content"> <a class="bt-service-icon" href="#"><i class="fa fa-usd"></i></a>
                        <h2>100% MONEY BACK GUARANTEED</h2>
                        <p>Incubation, gender equality, involvement innovate experience in the field combat.</p> <a class="btn" href="#">Read More</a> </div>
                </div>
            </div>
        </div>
    </div><!-- /.bt-service -->
@endsection

@section('fullWidth')
    <div class="container">
        <div class="bt-product-category row">
            <div class="box-heading title">
                <h1>Product</h1>
            </div>
            <div class="bt-featured-pro bt-nprolarge-tabs">
                <div id="bt_procate_00" class="box htabs-content boss-category-pro bt-nprolarge-nslider col-xs-4">
                    <div class="product-categories-box">
                        <div class="box-heading title">
                            <h3>Medicine &amp; Health</h3>
                        </div>
                        <div class="box-content bt-product-content">
                            <div class="bt-items bt-product-grid">
                                <div id="boss_procate_00">
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p5-100x100.jpg" alt="Dermalogica" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">Dermalogica</a> </div>
                                                    <p class="price"> $122.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p17-100x100.jpg" alt="kre-alkalyn" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">kre-alkalyn</a> </div>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                    <p class="price"> $122.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p15-100x100.jpg" alt="Lithium aspartate" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">Lithium aspartate</a> </div>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                    <p class="price"> $122.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- /.box-content -->
                    </div>
                </div><!-- /.htabs-content -->
                <div id="bt_procate_01" class="box htabs-content boss-category-pro bt-nprolarge-nslider col-xs-4">
                    <div class="product-categories-box">
                        <div class="box-heading title">
                            <h3>household</h3>
                        </div>
                        <div class="box-content bt-product-content">
                            <div class="bt-items bt-product-grid">
                                <div id="boss_procate_01">
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p19-100x100.jpg" alt="fundamental shampoo" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">fundamental shampoo</a> </div>
                                                    <p class="price"> $122.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p16-100x100.jpg" alt="nexafed " /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">nexafed </a> </div>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                    <p class="price"> $200.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p22-100x100.jpg" alt="OxyELITE pro" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">OxyELITE pro</a> </div>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                    <p class="price"> $122.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- /.box-content -->
                    </div>
                </div><!-- /.htabs-content -->
                <div id="bt_procate_02" class="box htabs-content boss-category-pro bt-nprolarge-nslider col-xs-4">
                    <div class="product-categories-box">
                        <div class="box-heading title">
                            <h3>Beauty</h3>
                        </div>
                        <div class="box-content bt-product-content">
                            <div class="bt-items bt-product-grid">
                                <div id="boss_procate_02">
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p12-100x100.jpg" alt="Emetrol" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">Emetrol</a> </div>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                    <p class="price"> $122.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p20-100x100.jpg" alt="fentora" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">fentora</a> </div>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> </div>
                                                    <p class="price"> $241.99 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                    <div class="bt-item-extra product-layout">
                                        <section class="product-thumb bt-item transition">
                                            <div class="image">
                                                <a href="product-detail.html"> <img src="images/product/p17-100x100.jpg" alt="kre-alkalyn" /> </a>
                                            </div>
                                            <div class="small_detail">
                                                <div class="caption">
                                                    <div class="name"> <a href="product-detail.html">kre-alkalyn</a> </div>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                    <p class="price"> $122.00 </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div><!-- /.bt-item-extra -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- /.box-content -->
                    </div>
                </div><!-- /.htabs-content -->
            </div><!-- /."bt-featured-pro -->
        </div>
    </div><!-- /.container -->
    <div class="boss-blog-featured">
        <div class="container">
            <div class="row">
                <div class="box-heading">
                    <h1><i class="fa fa-pencil"></i>Latest News</h1>
                </div>
                <div class="box-content">
                    <div class="box-article">
                        <div class="article-items odd col-sm-6 col-xs-12">
                            <div class="article_content">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/blog/b6-270x200.jpg" alt="Human being, transform diver p" />
                                    </a>
                                </div>
                                <div class="article-detail">
                                    <div class="article-name"> <a href="blog-detail.html">Human being, transform diver p</a> </div>
                                    <div class="more-info">
                                        <small class="time-stamp">
                                            Dec 22, 2014
                                            <span class="comment-count">|</span>
                                            <a href="blog-detail.html">3 Comments</a>
                                        </small>
                                    </div>
                                    <div class="description">
                                        <p>Spearmint ecru denim cashmere clutch holographic indigo Prada Saffiano washed out. Rings leather t</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.article-items -->
                        <div class="article-items even col-sm-6 col-xs-12">
                            <div class="article_content">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/blog/b2-270x200.jpg" alt="Agriculture, fighting poverty " />
                                    </a>
                                </div>
                                <div class="article-detail">
                                    <div class="article-name"> <a href="blog-detail.html">Agriculture, fighting poverty </a> </div>
                                    <div class="more-info">
                                        <small class="time-stamp">
                                            Dec 22, 2014
                                            <span class="comment-count">|</span>
                                            <a href="blog-detail.html">0 Comments</a>
                                        </small>
                                    </div>
                                    <div class="description">
                                        <p>Spearmint ecru denim cashmere clutch holographic indigo Prada Saffiano washed out. Rings leather t</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.article-items -->
                        <div class="article-items odd col-sm-6 col-xs-12">
                            <div class="article_content">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/blog/b1-270x200.jpg" alt="fighting poverty beneficiaries" />
                                    </a>
                                </div>
                                <div class="article-detail">
                                    <div class="article-name"> <a href="blog-detail.html">fighting poverty beneficiaries</a> </div>
                                    <div class="more-info">
                                        <small class="time-stamp">
                                            Dec 22, 2014
                                            <span class="comment-count">|</span>
                                            <a href="blog-detail.html">2 Comments</a>
                                        </small>
                                    </div>
                                    <div class="description">
                                        <p>Spearmint ecru denim cashmere clutch holographic indigo Prada Saffiano washed out. Rings leather t</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.article-items -->
                        <div class="article-items even col-sm-6 col-xs-12">
                            <div class="article_content">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/blog/b5-270x200.jpg" alt="social challenges community wo" />
                                    </a>
                                </div>
                                <div class="article-detail">
                                    <div class="article-name"> <a href="blog-detail.html">social challenges community wo</a> </div>
                                    <div class="more-info">
                                        <small class="time-stamp">
                                            Dec 22, 2014
                                            <span class="comment-count">|</span>
                                            <a href="blog-detail.html">1 Comments</a>
                                        </small>
                                    </div>
                                    <div class="description">
                                        <p>Spearmint ecru denim cashmere clutch holographic indigo Prada Saffiano washed out. Rings leather t</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.article-items -->
                    </div>
                </div><!-- /.box-content -->
            </div>
        </div>
    </div><!-- /.boss-blog-featured -->
@endsection

@push('scripts')
    <script>
        /* Today Deal */
         var myVar = setInterval(function() {
             Deal0()
         }, 1000);

         function Deal0() {
             var i = 0;
             var today = new Date();
             var dateStr = "0000-00-00";
             //alert(dateStr);
             if (dateStr != "0000-00-00") {
                 var date = dateStr.split("-");
                 var date_end = new Date(date[0], (date[1] - 1), date[2]);
                 var deal = new Date();
                 deal.setTime(date_end - today);
                 //alert(deal);
                 if (date_end >= today) {
                     var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                     var d = deal.getDate() + (month * deal.getMonth());
                     var h = deal.getHours() + (d * 24);
                     var m = deal.getMinutes();
                     var s = deal.getSeconds();
                     h = checkTime(h);
                     m = checkTime(m);
                     s = checkTime(s);
                     $(".datetime00").html('<div class="sep"></div><div><span class="number">' + h + '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m + '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s + '</span><span>Secs</span></div>');
                 }
             }
             var today = new Date();
             var dateStr = "2016-02-01";
             //alert(dateStr);
             if (dateStr != "0000-00-00") {
                 var date = dateStr.split("-");
                 var date_end = new Date(date[0], (date[1] - 1), date[2]);
                 var deal = new Date();
                 deal.setTime(date_end - today);
                 //alert(deal);
                 if (date_end >= today) {
                     var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                     var d = deal.getDate() + (month * deal.getMonth());
                     var h = deal.getHours() + (d * 24);
                     var m = deal.getMinutes();
                     var s = deal.getSeconds();
                     h = checkTime(h);
                     m = checkTime(m);
                     s = checkTime(s);
                     $(".datetime01").html('<div class="sep"></div><div><span class="number">' + h + '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m + '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s + '</span><span>Secs</span></div>');
                 }
             }
             var today = new Date();
             var dateStr = "0000-00-00";
             //alert(dateStr);
             if (dateStr != "0000-00-00") {
                 var date = dateStr.split("-");
                 var date_end = new Date(date[0], (date[1] - 1), date[2]);
                 var deal = new Date();
                 deal.setTime(date_end - today);
                 //alert(deal);
                 if (date_end >= today) {
                     var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                     var d = deal.getDate() + (month * deal.getMonth());
                     var h = deal.getHours() + (d * 24);
                     var m = deal.getMinutes();
                     var s = deal.getSeconds();
                     h = checkTime(h);
                     m = checkTime(m);
                     s = checkTime(s);
                     $(".datetime02").html('<div class="sep"></div><div><span class="number">' + h + '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m + '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s + '</span><span>Secs</span></div>');
                 }
             }
             var today = new Date();
             var dateStr = "0000-00-00";
             //alert(dateStr);
             if (dateStr != "0000-00-00") {
                 var date = dateStr.split("-");
                 var date_end = new Date(date[0], (date[1] - 1), date[2]);
                 var deal = new Date();
                 deal.setTime(date_end - today);
                 //alert(deal);
                 if (date_end >= today) {
                     var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                     var d = deal.getDate() + (month * deal.getMonth());
                     var h = deal.getHours() + (d * 24);
                     var m = deal.getMinutes();
                     var s = deal.getSeconds();
                     h = checkTime(h);
                     m = checkTime(m);
                     s = checkTime(s);
                     $(".datetime03").html('<div class="sep"></div><div><span class="number">' + h + '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m + '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s + '</span><span>Secs</span></div>');
                 }
             }
             var today = new Date();
             var dateStr = "0000-00-00";
             //alert(dateStr);
             if (dateStr != "0000-00-00") {
                 var date = dateStr.split("-");
                 var date_end = new Date(date[0], (date[1] - 1), date[2]);
                 var deal = new Date();
                 deal.setTime(date_end - today);
                 //alert(deal);
                 if (date_end >= today) {
                     var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                     var d = deal.getDate() + (month * deal.getMonth());
                     var h = deal.getHours() + (d * 24);
                     var m = deal.getMinutes();
                     var s = deal.getSeconds();
                     h = checkTime(h);
                     m = checkTime(m);
                     s = checkTime(s);
                     $(".datetime04").html('<div class="sep"></div><div><span class="number">' + h + '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m + '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s + '</span><span>Secs</span></div>');
                 }
             }
         }

         function checkTime(j) {
             if (j < 10) {
                 j = "0" + j;
             }
             return j;
         }

        jQuery(document).ready(function() {
            /* Main Slider */
            $('.tp-banner0').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startWithSlide: 0,
                startwidth: 870,
                startheight: 450,
                hideThumbs: 10,
                hideTimerBar: "on",
                thumbWidth: 50,
                thumbHeight: 50,
                thumbAmount: 4,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "round",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 50,
                soloArrowLeftVOffset: 8,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 50,
                soloArrowRightVOffset: 8,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "on",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 500,
                hideAllCaptionAtLilmit: 500,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });


            loadtopmenu();
            $("#boss-menu-category .boss_heading").on('click',function() {
                $('#boss-menu-category').toggleClass('opencate');
                loadtopmenu();
            });

            function loadtopmenu() {
                var menuheight = $('#boss-menu-category .box-content').outerHeight();
                var topcate = $('#boss-menu-category').offset().top;
                $('#boss-menu-category .boss-menu-cate .nav_title').each(function(index, element) {
                    var liheight = $(this).outerHeight();
                    var subheight = $(this).next('.nav_submenu').outerHeight();
                    var topheight = $(this).offset().top - topcate - 55;
                });
            }
            $('#boss-menu-category .b_menucategory_hidde,#boss-menu-category  .menu_loadmore_hidden').hide();
            $('#boss-menu-category .menu_loadmore').on('click',function() {
                $('#boss-menu-category .b_menucategory_hidde').slideToggle("normal", function() {
                    $('#boss-menu-category .menu_loadmore').hide();
                    $('#boss-menu-category .menu_loadmore_hidden').show();
                });
            });
            $('#boss-menu-category .menu_loadmore_hidden').on('click',function() {
                $('#boss-menu-category .b_menucategory_hidde').slideToggle("normal", function() {
                    $('#boss-menu-category .menu_loadmore').show();
                    $('#boss-menu-category .menu_loadmore_hidden').hide();
                });
            });


            /* Today Deal */
             setTimeout(function() {
                 $('#product_special_0').carouFredSel({
                     auto: {
                         play: false,
                         timeoutDuration: 4000,
                     },
                     responsive: true,
                     width: '100%',
                     height: 'variable',
                     prev: '#prev_special_0',
                     next: '#next_special_0',
                     swipe: {
                         onTouch: true
                     },
                     items: {
                         width: 230,
                         height: 'variable',
                         visible: {
                             min: 1,
                             max: 1,
                         }
                     },
                     scroll: {
                         direction: 'left', //  The direction of the transition.
                         duration: 1200, //  The duration of the transition.
                         items: 1,
                     },

                 });
             }, 200);

            /* Testimonial */
            $('#boss_testimonial_0').carouFredSel({
                auto: {
                    play: false,
                    timeoutDuration: 4500,
                },
                responsive: true,
                width: '100%',
                height: 'variable',
                prev: '#prev_testimonial_0',
                next: '#next_testimonial_0',
                swipe: {
                    onTouch: false
                },
                items: {
                    /*width: image_width,*/
                    height: 'variable',
                    visible: {
                        min: 1,
                        max: 1
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 1000 //  The duration of the transition.
                },
                onCreate: function() {
                    $(window).smartresize(function() {
                        $('#boss_testimonial_0 div.testimonial-item').css("height", getMaxHeight('#boss_testimonial_0 div.testimonial-item'));
                        $('#boss_testimonial_min_height_0 div.caroufredsel_wrapper').css("width", '100%');
                        $('#boss_testimonial_min_height_0 div.caroufredsel_wrapper #boss_testimonial_0').css("width", '100%');
                    });
                }
            });
            $('#boss_testimonial_0 div.testimonial-item').css("height", getMaxHeight('#boss_testimonial_0 div.testimonial-item'));
            $('#boss_testimonial_min_height_0 div.caroufredsel_wrapper').css("min-height", getMaxHeight('#boss_testimonial_0 div.testimonial-item'));

            /* Best Product */
            initCarousel(0, 0, 0, 1, 81);
            checkDevices(0);
            $("a.head_tabs0").on('click',function() {
                if (getWidthBrowser() > 767) {
                    return false;
                }
                if (!$(this).parent().hasClass('active')) {
                    $(".head_tabs0").parent().removeClass("active");
                    var $src_tab = $(this).attr("data-src");
                    $($src_tab).parent().addClass("active");
                    $(".content_tabs0").hide();
                    var $selected_tab = $(this).attr("href");
                    $($selected_tab).fadeIn();
                }
                return false;
            });
            $(window).resize(function() {
                checkDevices(0);
            });

            /* vaccines */
            if ($(window).width() > 768) {
                var image_width = 268;
                var per_row = 3;
                if ($(window).width() <= 1023) {
                    per_row = 3;
                }
            } else {
                if ($(window).width() < 480) {
                    per_row = 1;
                } else {
                    per_row = 2;
                }
                var image_width = 200;
            }
            $('#boss_featured_0').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                height: 'auto',
                prev: '#prev_featured_0',
                next: '#next_featured_0',
                pagination: '#bt_pag_0',
                swipe: {
                    onTouch: true
                },
                items: {
                    width: image_width,
                    height: 'auto',
                    visible: {
                        min: 1,
                        max: per_row,
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 1000 //  The duration of the transition.
                },
                onCreate: function() {
                    $(window).smartresize(function() {
                        if ($(window).width() > 768) {
                            var image_width = 268;
                            var per_row = 3;
                            if ($(window).width() <= 1023) {
                                per_row = 3;
                            }
                        } else {
                            if ($(window).width() < 480) {
                                per_row = 1;
                            } else {
                                per_row = 2;
                            }
                            var image_width = 200;
                        }
                        $('#boss_featured_0').carouFredSel({
                            auto: false,
                            responsive: true,
                            width: '100%',
                            height: 'auto',
                            prev: '#prev_featured_0',
                            next: '#next_featured_0',
                            pagination: '#bt_pag_0',
                            swipe: {
                                onTouch: true
                            },
                            items: {
                                width: image_width,
                                height: 'auto',
                                visible: {
                                    min: 1,
                                    max: per_row,
                                }
                            },
                            scroll: {
                                direction: 'left', //  The direction of the transition.
                                duration: 1000 //  The duration of the transition.
                            },
                        });
                        $('#bt_fea_pro_0 .box-content .caroufredsel_wrapper').css("height", getMaxHeight('#boss_featured_0 section.bt-item') + 10);
                    });
                },
            });
            $('#bt_fea_pro_0 .box-content .caroufredsel_wrapper').css("height", getMaxHeight('#boss_featured_0 section.bt-item') + 10);

            /* cosmetics */
            if ($(window).width() > 768) {
                var image_width = 268;
                var per_row = 3;
                if ($(window).width() <= 1023) {
                    per_row = 3;
                }
            } else {
                if ($(window).width() < 480) {
                    per_row = 1;
                } else {
                    per_row = 2;
                }
                var image_width = 200;
            }
            $('#boss_featured_1').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                height: 'auto',
                prev: '#prev_featured_1',
                next: '#next_featured_1',
                pagination: '#bt_pag_1',
                swipe: {
                    onTouch: true
                },
                items: {
                    width: image_width,
                    height: 'auto',
                    visible: {
                        min: 1,
                        max: per_row,
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 1000 //  The duration of the transition.
                },
                onCreate: function() {
                    $(window).smartresize(function() {
                        if ($(window).width() > 768) {
                            var image_width = 268;
                            var per_row = 3;
                            if ($(window).width() <= 1023) {
                                per_row = 3;
                            }
                        } else {
                            if ($(window).width() < 480) {
                                per_row = 1;
                            } else {
                                per_row = 2;
                            }
                            var image_width = 200;
                        }
                        $('#boss_featured_1').carouFredSel({
                            auto: false,
                            responsive: true,
                            width: '100%',
                            height: 'auto',
                            prev: '#prev_featured_1',
                            next: '#next_featured_1',
                            pagination: '#bt_pag_1',
                            swipe: {
                                onTouch: true
                            },
                            items: {
                                width: image_width,
                                height: 'auto',
                                visible: {
                                    min: 1,
                                    max: per_row,
                                }
                            },
                            scroll: {
                                direction: 'left', //  The direction of the transition.
                                duration: 1000 //  The duration of the transition.
                            },
                        });
                        $('#bt_fea_pro_1 .box-content .caroufredsel_wrapper').css("height", getMaxHeight('#boss_featured_1 section.bt-item') + 10);
                    });
                },
            });
            $('#bt_fea_pro_1 .box-content .caroufredsel_wrapper').css("height", getMaxHeight('#boss_featured_1 section.bt-item') + 10);

            /* vitamins */
            if ($(window).width() > 768) {
                var image_width = 268;
                var per_row = 3;
                if ($(window).width() <= 1023) {
                    per_row = 3;
                }
            } else {
                if ($(window).width() < 480) {
                    per_row = 1;
                } else {
                    per_row = 2;
                }
                var image_width = 200;
            }
            $('#boss_featured_2').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                height: 'auto',
                prev: '#prev_featured_2',
                next: '#next_featured_2',
                pagination: '#bt_pag_2',
                swipe: {
                    onTouch: true
                },
                items: {
                    width: image_width,
                    height: 'auto',
                    visible: {
                        min: 1,
                        max: per_row,
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 1000 //  The duration of the transition.
                },
                onCreate: function() {
                    $(window).smartresize(function() {
                        if ($(window).width() > 768) {
                            var image_width = 268;
                            var per_row = 3;
                            if ($(window).width() <= 1023) {
                                per_row = 3;
                            }
                        } else {
                            if ($(window).width() < 480) {
                                per_row = 1;
                            } else {
                                per_row = 2;
                            }
                            var image_width = 200;
                        }
                        $('#boss_featured_2').carouFredSel({
                            auto: false,
                            responsive: true,
                            width: '100%',
                            height: 'auto',
                            prev: '#prev_featured_2',
                            next: '#next_featured_2',
                            pagination: '#bt_pag_2',
                            swipe: {
                                onTouch: true
                            },
                            items: {
                                width: image_width,
                                height: 'auto',
                                visible: {
                                    min: 1,
                                    max: per_row,
                                }
                            },
                            scroll: {
                                direction: 'left', //  The direction of the transition.
                                duration: 1000 //  The duration of the transition.
                            },
                        });
                        $('#bt_fea_pro_2 .box-content .caroufredsel_wrapper').css("height", getMaxHeight('#boss_featured_2 section.bt-item') + 10);
                    });
                },
            });
            $('#bt_fea_pro_2 .box-content .caroufredsel_wrapper').css("height", getMaxHeight('#boss_featured_2 section.bt-item') + 10);

            /* Product */
            function loadslider($tabmodule) {
                if ($(window).width() > 768) {
                    var image_width = 100;
                } else {
                    var image_width = 300;
                }
                $('#boss_procate_' + $tabmodule).carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    height: 'variable',
                    prev: '#bt_next_pro_' + $tabmodule,
                    next: '#bt_prev_pro_' + $tabmodule,
                    pagination: '#bt_pag_pro_' + $tabmodule,
                    swipe: {
                        onTouch: true
                    },
                    items: {
                        width: image_width,
                        height: 'variable',
                        visible: {
                            min: 1,
                            max: 1
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 1000 //  The duration of the transition.
                    }
                });
            };

            boss_quick_shop();
        });

        /* Modal Quick Shop */
        $('#myModal').on('shown.bs.modal', function (e) {
            $.fn.CloudZoom.defaults = {
                adjustX: 0,
                adjustY: 0,
                tint: '#FFF',
                tintOpacity: 0.5,
                softFocus: 0,
                lensOpacity: 0.7,
                zoomWidth: '450',
                zoomHeight: '552',
                position: 'inside',
                showTitle: 0,
                titleOpacity: 0.5,
                smoothMove: '3'
            };
            $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
        })
        /* Quick Shop */
        function boss_quick_shop(){
            $('.product-thumb').each(function(index, value) {
                var _qsHref = '<button class=\"btn-quickshop\" title =\"Quick Shop\" class=\"sft_quickshop_icon \" data-toggle=\"modal\" data-target=\"#myModal\">Quick Shop</button>';
                $('.image', this).append(_qsHref);
            });
        }
    </script>
@endpush
