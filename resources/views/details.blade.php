@extends('layouts.master')
@section('title', 'this is dynamic title')


@section('sidebar')
    @include('etc.category')
@endsection


@section('content')
    <div class="product-info">
        <div class="row">
            <div class="col-sm-6 ">
                <div class="bt-product-zoom">
                    <div class="bosszoomtoolbox boss-additional">
                        <div itemprop="image" class="image">
                            <a href="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" class="cloud-zoom" id='zoom1' rel=""><img src="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" alt="Cashmere cuff vintage Levi maxi" id="image" />
                            </a>
                        </div>
                        <div class="image-additional">
                            <ul class="thumbnails" id="boss-image-additional">
                                <li class="image-additional">
                                    <a href="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{url("/")}}/images/product/p10-600x702.jpg' "><img src="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" alt="Cashmere cuff vintage Levi maxi" />
                                    </a>
                                </li>
                                <li class="image-additional">
                                    <a href="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{url("/")}}/images/product/p10-600x702.jpg' "><img src="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" alt="Cashmere cuff vintage Levi maxi" />
                                    </a>
                                </li>
                                <li class="image-additional">
                                    <a href="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{url("/")}}/images/product/p10-600x702.jpg' "><img src="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" alt="Cashmere cuff vintage Levi maxi" />
                                    </a>
                                </li>
                                <li class="image-additional">
                                    <a href="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{url("/")}}/images/product/p10-600x702.jpg' "><img src="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" alt="Cashmere cuff vintage Levi maxi" />
                                    </a>
                                </li>
                                <li class="image-additional">
                                    <a href="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{url("/")}}/images/product/p10-600x702.jpg' "><img src="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" alt="Cashmere cuff vintage Levi maxi" />
                                    </a>
                                </li>
                                <li class="image-additional">
                                    <a href="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{url("/")}}/images/product/p10-600x702.jpg' "><img src="{{url('/')}}/images/product/p10-600x702.jpg" title="Cashmere cuff vintage Levi maxi" alt="Cashmere cuff vintage Levi maxi" />
                                    </a>
                                </li>
                            </ul> <a id="prev_image_additional" class="prev nav_thumb" href="javascript:void(0)" style="display:block;" title="prev"><i data-original-title="Previous" class="fa fa-angle-left btooltip">&nbsp;</i></a> <a id="next_image_additional" class="next nav_thumb" href="javascript:void(0)" style="display:block;" title="next"><i data-original-title="Next" class="fa fa-angle-right btooltip">&nbsp;</i></a>
                        </div><!-- /.image-additional -->
                    </div><!-- /.bosszoomtoolbox -->
                </div><!-- /.bt-product-zoom -->
            </div>
            <div class="col-sm-6">
                <h2>Cashmere cuff vintage Levi maxi</h2>
                <div class="review">
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                    <div class="review_text"> <a href="#" onclick="$('a[href=\'#tab_review\']').trigger('click'); goToByScroll('review'); return false;">2 reviews</a> <a href="#" onclick="$('a[href=\'#tab_review\']').trigger('click'); goToByScroll('bt_review'); return false;"> Write a review</a> </div>
                </div><!-- /.review -->
                <div class="description">
                    <h3>INFO</h3>
                    <ul class="list-unstyled">
                        <li>- Brand: <a href="#">Apple</a>
                        </li>
                        <li>- Product Code: Product 5</li>
                        <li>- Availability:<b class="stock"> In Stock</b>
                        </li>
                    </ul>
                </div><!-- /.description -->
                <div class="price_info">
                    <span class="price">$122.00</span>
                    <br> <span class="price-tax">Ex Tax: $100.00</span>
                    <br>
                </div><!-- /.price_info -->
                <div id="product" class="options">
                    <h3>Available Options</h3>
                    <div class="form-group required">
                        <label class="control-label">Color</label>
                        <div id="input-option229">
                            <div class="radio bt-image-option">
                                <label>
                                    <input type="radio" name="option[229]" value="26" /> <img src="{{url('/')}}/images/colors/pink-50x50.png" alt="Pink +$36.00" /> Pink (+$36.00) </label>
                            </div>
                            <div class="radio bt-image-option">
                                <label>
                                    <input type="radio" name="option[229]" value="25" /> <img src="{{url('/')}}/images/colors/black-50x50.png" alt="Black +$120.00" /> Black (+$120.00) </label>
                            </div>
                        </div>
                    </div>
                    <div class="cart">
                        <div class="quantily_info">
                            <div class="title_text"><span>Qty</span>
                            </div>
                            <div class="select_number">
                                <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                                <button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-angle-up"></i>
                                </button>
                                <button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                            <input type="hidden" name="product_id" size="2" value="32" /> </div>
                        <div class="button-group">
                            <button type="button" id="button-cart" data-loading-text="Loading..." class="btn-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            <div class="wishlist-compare">
                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i></button>
                                <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i></button>
                             </div>
                        </div>
                    </div>
                </div><!-- /.options -->
            </div>
        </div>
    </div><!-- /.product-info -->
    <div id="tabs" class="htabs">
        <ul>
            <li class="active"><a href="#tab_description" data-toggle="tab">Description</a>
            </li>
            <li><a href="#tab_review" data-toggle="tab">Reviews (2)</a>
            </li>
            <li><a href="#tab_facecomments" data-toggle="tab">Face comments</a>
            </li>
        </ul>
    </div><!-- /.htabs -->
    <div class="tab-content">
        <div class="tab-pane active" id="tab_description">
            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae.</p>
            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus. Etiam tempor quam mauris,Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitaeFusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus. Etiam tempor quam mauris,raesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus.</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="http://player.vimeo.com/video/19447662" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
            </div>
            <br>
            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae</p>
            <p>Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus. Etiam tempor quam mauris,Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitaeFusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus. Etiam tempor quam mauris,raesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus. Etiam tempor quam mauris,Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem</p>
        </div><!-- /.tab-pane -->
        <div class="review-product tab-pane" id="tab_review">
            <div class="review-heading">
                <h1>Reviews (2)</h1>
            </div>
            <div id="bt_review">
                <form class="form-horizontal" id="form-review">
                    <div id="review">
                        <div class="box-review">
                            <p> Etiam tempor quam mauris,Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus</p>
                            <p class="author">by <span>hhx</span> 20/01/2015</p>
                        </div>
                        <div class="box-review">
                            <p>Holy night away supper standar natural ensua xitua las is very navar.</p>
                            <p class="author">by <span>Admin</span> 09/01/2015</p>
                        </div>
                        <div class="text-right"></div>
                    </div>
                    <h1>Write a review</h1>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label" for="input-name"><b>Your Name</b>
                            </label>
                            <input type="text" name="name" value="" id="input-name" class="form-control" /> </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label" for="input-review"><b>Your Review</b>
                            </label>
                            <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                            <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label"><b>Rating</b>
                            </label> &nbsp;&nbsp;&nbsp; Bad&nbsp;
                            <input type="radio" name="rating" value="1" /> &nbsp;
                            <input type="radio" name="rating" value="2" /> &nbsp;
                            <input type="radio" name="rating" value="3" /> &nbsp;
                            <input type="radio" name="rating" value="4" /> &nbsp;
                            <input type="radio" name="rating" value="5" /> &nbsp;Good</div>
                    </div>
                    <div class="buttons">
                        <div class="pull-left">
                            <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.tab-pane -->
        <div class="face-comment tab-pane" id="tab_facecomments">
            <div class="bt-facecomments">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="fb-comments" data-href="" data-colorscheme="light" data-numposts="5" data-order-by="reverse_time"></div>
                    </div>
                </div>
                <div id="fb-root"></div>
            </div>
        </div><!-- /.tab-pane -->
    </div><!-- /.tab-content -->
    <div class="product-related">
            <h1 class="box-title">Related Products: (4)</h1>
            <div class="carousel-button">
                <a id="prev_related" class="prev nav_thumb" href="javascript:void(0)" style="display:inline-block;" title="prev"><i class="fa fa-angle-left"></i></a>
                <a id="next_related" class="next nav_thumb" href="javascript:void(0)" style="display:inline-block;" title="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <div class="list_carousel responsive">
                <ul id="product_related" class="content-products">
                    <li>
                        <div class="product-thumb">
                            <div class="image">
                                <a href="product-detail.html"><img src="{{url('/')}}/images/product/p15-268x268.jpg" alt="Prada Saffiano cashmere crop" title="Prada Saffiano cashmere crop" class="img-responsive" />
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
                    </li>
                    <li>
                        <div class="product-thumb">
                            <div class="image">
                                <a href="product-detail.html"><img src="{{url('/')}}/images/product/p15-268x268.jpg" alt="Prada Saffiano cashmere crop" title="Prada Saffiano cashmere crop" class="img-responsive" />
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
                    </li>
                    <li>
                        <div class="product-thumb">
                            <div class="image">
                                <a href="product-detail.html"><img src="{{url('/')}}/images/product/p15-268x268.jpg" alt="Prada Saffiano cashmere crop" title="Prada Saffiano cashmere crop" class="img-responsive" />
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
                    </li>
                    <li>
                        <div class="product-thumb">
                            <div class="image">
                                <a href="product-detail.html"><img src="{{url('/')}}/images/product/p15-268x268.jpg" alt="Prada Saffiano cashmere crop" title="Prada Saffiano cashmere crop" class="img-responsive" />
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
                    </li>
                </ul>
            </div>
        </div><!-- /.product-related -->
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            /* bosszoomtoolbox */
            $.fn.CloudZoom.defaults = {
                adjustX: 0,
                adjustY: 0,
                tint: '#FFF',
                tintOpacity: 0.5,
                softFocus: 0,
                lensOpacity: 0.7,
                zoomWidth: '450',
                zoomHeight: '512',
                position: 'inside',
                showTitle: 0,
                titleOpacity: 0.5,
                smoothMove: '3'
            };
            $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();

            //pass the images to Fancybox
            var gallerylist = [];
            gallerylist.push({
                href: "{{url('/')}}/images/product/p21-600x683.jpg",
                title: "Cashmere cuff vintage Levi maxi"
            });
            gallerylist.push({
                href: "{{url('/')}}/images/product/p18-600x683.jpg",
                title: "Cashmere cuff vintage Levi maxi"
            });
            gallerylist.push({
                href: "{{url('/')}}/images/product/p1-600x683.jpg",
                title: "Cashmere cuff vintage Levi maxi"
            });
            gallerylist.push({
                href: "{{url('/')}}/images/product/p16-600x683.jpg",
                title: "Cashmere cuff vintage Levi maxi"
            });
            gallerylist.push({
                href: "{{url('/')}}/images/product/p11-600x683.jpg",
                title: "Cashmere cuff vintage Levi maxi"
            });
            gallerylist.push({
                href: "{{url('/')}}/images/product/p10-600x683.jpg",
                title: "Cashmere cuff vintage Levi maxi"
            });
            $("#wrap").bind('click', function() {
                $.fancybox.open(gallerylist);
                return false;
            });

            $("#boss-image-additional li a").on('click',function() {
                $("#boss_large").attr("href", this)
            });

            /* Color Option */
            $('.bt-image-option').on('click',function() {
                $('.bt-image-option').each(function() {
                    $(this).removeClass('active');
                });
                $(this).addClass('active');
            });

            /* boss-image-additional slider */
            $('#boss-image-additional').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev_image_additional',
                next: '#next_image_additional',
                swipe: {
                    onTouch: true
                },
                items: {
                    width: 120,
                    height: 'auto',
                    visible: {
                        min: 1,
                        max: 3
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 500, //  The duration of the transition.
                }
            });

        });

        function changeQty(increase) {
            var qty = parseInt($('.select_number').find("input").val());
            if (!isNaN(qty)) {
                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
                $('.select_number').find("input").val(qty);
            } else {
                $('.select_number').find("input").val(1);
            }
        }
        function goToByScroll(id){
            $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
        }
    </script>
        <script>
        jQuery(document).ready(function() {
            /* Related Product Slider */
            $('#product_related').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev_related',
                next: '#next_related',
                swipe: {
                    onTouch: true
                },
                items: {
                    width: 370,
                    height: 470,
                    visible: {
                        min: 1,
                        max: 3
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 1000 //  The duration of the transition.
                }
            });
            /* Related Article Slider */
            $('#article_related').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev_art_related',
                next: '#next_art_related',
                swipe: {
                    onTouch: true
                },
                items: {
                    width: 272,
                    height: 'auto',
                    visible: {
                        min: 1,
                        max: 3
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 1000 //  The duration of the transition.
                }
            });
        });
    </script>
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
