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
    </div><!-- /.bt-block-category -->
    <div class="category-list not-animated" data-animate="fadeInRight" data-delay="300">
        <h4>Refine Search</h4>
        <ul>
            <li><a href="product-category.html">Cups &amp; Glass (4)</a></li>
            <li><a href="product-category.html">Sweatshirts (11)</a></li>
            <li><a href="product-category.html">Jeans (1)</a></li>
            <li><a href="product-category.html">Cords (0)</a></li>
            <li><a href="product-category.html">T-Shirts (2)</a></li>
        </ul>
    </div><!-- /.category-list -->
    <div class="product-filter">
        <div class="link-compare"><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/product-compare.html" id="compare-total">Product Compare (0)</a>
        </div><!-- /.link-compare -->
        <div class="display hidden-xs">
            <button type="button" id="list-view" class="btn-list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i>
            </button>
            <button type="button" id="grid-view" class="btn-grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th-large"></i>
            </button>
        </div><!-- /.display -->
        <div class="limit-sort hidden-xs">
            <div class="box_sort">
                <label class="control-label" for="input-sort">Sort By:</label>
                <label>
                    <select id="input-sort" class="form-control" onchange="location = this.value;">
                        <option value="sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                        <option value="sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                        <option value="sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                        <option value="sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                        <option value="sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                        <option value="sort=rating&amp;order=DESC">Rating (Highest)</option>
                        <option value="sort=rating&amp;order=ASC">Rating (Lowest)</option>
                        <option value="sort=p.model&amp;order=ASC">Model (A - Z)</option>
                        <option value="sort=p.model&amp;order=DESC">Model (Z - A)</option>
                    </select>
                </label>
            </div>
            <div class="box_limit">
                <label class="control-label" for="input-limit">Show:</label>
                <label>
                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                        <option value="limit=15" selected="selected">15</option>
                        <option value="limit=25">25</option>
                        <option value="limit=50">50</option>
                        <option value="limit=75">75</option>
                        <option value="limit=100">100</option>
                    </select>
                </label>
            </div>
        </div><!-- /.limit-sort -->
    </div><!-- /.product-filter -->
    <div class="row">
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Cashmere cuff vintage Levi maxi" title="Cashmere cuff vintage Levi maxi" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Cashmere cuff vintage Levi maxi</a>
                    </div>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <div class="price"> $122.00 </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p5-268x268.jpg" alt="Cashmere Saint Laurent" title="Cashmere Saint Laurent" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Cashmere Saint Laurent</a>
                    </div>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <div class="price"> $122.00 </div>
                    <div class="b_filter"> <img src="images/colors/black-20x20.png" title="Black" alt="Black">
                        </span> <img src="images/colors/pink-20x20.png" title="Pink" alt="Pink">
                        </span> <img src="images/colors/green-20x20.png" title="Green" alt="Green">
                        </span> <img src="images/colors/orange-20x20.jpg" title="Orange" alt="Orange">
                        </span>
                    </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Cashmere Saint Laurent" title="Cashmere Saint Laurent" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Cashmere Saint Laurent</a>
                    </div>
                    <div class="price"> $2,000.00 </div>
                    <div class="b_filter"> <img src="images/colors/pink-20x20.png" title="Pink" alt="Pink">
                        </span> <img src="images/colors/red-20x20.png" title="Red" alt="Red">
                        </span> <img src="images/colors/gray-20x20.png" title="Yellow" alt="Yellow">
                        </span>
                    </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p12-268x268.jpg" alt="Floral gold collar chunky" title="Floral gold collar chunky" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Floral gold collar chunky</a>
                    </div>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <div class="price"> <span class="price-old">$122.00</span> <span class="price-new">$98.00</span> </div>
                    <div class="b_filter"> <img src="images/colors/black-20x20.png" title="Black" alt="Black">
                        </span> <img src="images/colors/red-20x20.png" title="Red" alt="Red">
                        </span>
                    </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Jil Sander Vasari white shirt" title="Jil Sander Vasari white shirt" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Jil Sander Vasari white shirt</a>
                    </div>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <div class="price"> $122.00 </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p17-268x268.jpg" alt="Leggings midi sneaker cable knit" title="Leggings midi sneaker cable knit" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Leggings midi sneaker cable knit</a>
                    </div>
                    <div class="price"> $122.00 </div>
                    <div class="b_filter"> </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p5-268x268.jpg" alt="Metallic indigo cuff seam bandeau" title="Metallic indigo cuff seam bandeau" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Metallic indigo cuff seam bandeau</a>
                    </div>
                    <div class="price"> $602.00 </div>
                    <div class="b_filter"> <img src="images/colors/black-20x20.png" title="Black" alt="Black">
                        </span> <img src="images/colors/red-20x20.png" title="Red" alt="Red">
                        </span>
                    </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Minimal black ribbed bandeau" title="Minimal black ribbed bandeau" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Minimal black ribbed bandeau</a>
                    </div>
                    <div class="price"> $123.20 </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Minimal black ribbed bandeau" title="Minimal black ribbed bandeau" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Minimal black ribbed bandeau</a>
                    </div>
                    <div class="price"> $122.00 </div>
                    <div class="b_filter"> <img src="images/colors/red-20x20.png" title="Red" alt="Red">
                        </span> <img src="images/colors/green-20x20.png" title="Green" alt="Green">
                        </span>
                    </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p5-268x268.jpg" alt="Minimal black ribbed bandeau" title="Minimal black ribbed bandeau" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Minimal black ribbed bandeau</a>
                    </div>
                    <div class="price"> $122.00 </div>
                    <div class="b_filter"> </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Navy blue center part leather" title="Navy blue center part leather" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Navy blue center part leather</a>
                    </div>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <div class="price"> $1,202.00 </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p3-268x268.jpg" alt="Oversized sweatshirt" title="Oversized sweatshirt" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Oversized sweatshirt</a>
                    </div>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <div class="price"> $122.00 </div>
                    <div class="b_filter"> <img src="images/colors/black-20x20.png" title="Black" alt="Black">
                        </span> <img src="images/colors/pink-20x20.png" title="Pink" alt="Pink">
                        </span> <img src="images/colors/red-20x20.png" title="Red" alt="Red">
                        </span>
                    </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p15-268x268.jpg" alt="Prada Saffiano cashmere crop" title="Prada Saffiano cashmere crop" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Prada Saffiano cashmere crop</a>
                    </div>
                    <div class="price"> $122.00 </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p8-268x268.jpg" alt="Ribbed boots holographic Céline" title="Ribbed boots holographic Céline" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Ribbed boots holographic Céline</a>
                    </div>
                    <div class="price"> $337.99 </div>
                    <div class="b_filter"> <img src="images/colors/white-20x20.jpg" title="White" alt="White">
                        </span>
                    </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
        <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
                <div class="image">
                    <a href="product-detail.html"><img src="images/product/p11-268x268.jpg" alt="Ribbed boots holographic Céline" title="Ribbed boots holographic Céline" class="img-responsive" />
                    </a>
                </div>
                <div class="caption">
                    <div class="name"><a href="product-detail.html">Ribbed boots holographic Céline</a>
                    </div>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <div class="price"> $98.00 </div>
                    <div class="description">
                        <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et bl..</p>
                    </div>
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
        </div><!-- /.product-layout -->
    </div><!-- /.row -->
    <div class="result-pagination">
        <div class="results pull-left">Showing 1 to 15 of 19 (2 Pages)</div>
        <div class="links">
            <ul class="pagination">
                <li class="active"><span>1</span>
                </li>
                <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/page=2">2</a>
                </li>
                <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/page=2">&gt;</a>
                </li>
                <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/page=2">&gt;|</a>
                </li>
            </ul>
        </div>
    </div><!-- /.result-pagination -->

    <div id="tags-load"><i class="fa fa-spinner fa-pulse fa-2x"></i> </div>
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {

            boss_quick_shop();
            dataAnimate();

            /* View Mode */
            // Product List
            $('#list-view').on('click',function() {
                $('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');
                localStorage.setItem('display', 'list');
            });
            // Product Grid
            $('#grid-view').on('click',function() {
                // What a shame bootstrap does not take into account dynamically loaded columns
                cols = $('#column-right, #column-left').length;
                if (cols == 2) {
                    $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-6 col-xs-12');
                } else if (cols == 1) {
                    $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12');
                } else {
                    $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-3 col-xs-12');
                }
                localStorage.setItem('display', 'grid');
            });
            if (localStorage.getItem('display') == 'list') {
                $('#list-view').trigger('click');
            } else {
                $('#grid-view').trigger('click');
            }
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
