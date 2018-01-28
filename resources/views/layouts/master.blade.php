<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Drug Store - @yield('title')</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Webstrot">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

	<!-- ================= Google Fonts ================== -->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/app.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/menu_default.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/boss_megamenu.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/jquery.jgrowl.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/boss_alphabet.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/boss_facecomments.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/loading.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/cs.animate.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/boss_special.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/boss_filterproduct.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/revolutionslider_settings.css" media="screen" />

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    <style media="screen">
        .bt-home-page {
            background: #fff !important;
        }
    </style>
</head>

<body class="bt-home-page">
    <div id="app">
        {{-- <div id="bt_loading">
            <div class="bt-loading">
                <div id="circularG">
                    <div id="circularG_1" class="circularG"> </div>
                    <div id="circularG_2" class="circularG"> </div>
                    <div id="circularG_3" class="circularG"> </div>
                    <div id="circularG_4" class="circularG"> </div>
                    <div id="circularG_5" class="circularG"> </div>
                    <div id="circularG_6" class="circularG"> </div>
                    <div id="circularG_7" class="circularG"> </div>
                    <div id="circularG_8" class="circularG"> </div>
                </div>
            </div>
        </div><!-- /#bt_loading --> --}}

        <div id="bt_container" class="bt-wide">
            <div id="bt_header" class="">
                <nav id="top">
                    <div class="container">
                        <div class="row">
                            <div id="left_top_links" class="nav pull-left"> <a href="contact.html"><i class="fa fa-phone"></i> <span>HOTLINE: 111-111-1111</span></a> </div>
                            <div id="right_top_links" class="nav pull-right">
                                <div class="bt-language">
                                    <form method="post" enctype="multipart/form-data" class="language">
                                        <div class="btn-group">
                                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <span><img src="{{url('/')}}/images/flags/gb.png" alt="English" title="English"></span> <span>en</span><i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/en"><span class="text-left">English</span><span class="text-right"><img src="{{url('/')}}/images/flags/gb.png" alt="English" title="English" /></span></a>
                                                </li>
                                                <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/de"><span class="text-left">Deutsch</span><span class="text-right"><img src="{{url('/')}}/images/flags/de.png" alt="Deutsch" title="Deutsch" /></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="hidden" name="code" value="" />
                                        <input type="hidden" name="redirect" value="" /> </form>
                                </div><!-- /.bt-language -->
                                <div class="bt-currency">
                                    <form method="post" enctype="multipart/form-data" class="currency">
                                        <div class="btn-group">
                                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>$</strong> <span>USD</span> <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <button class="currency-select btn btn-link" type="button" name="EUR"><span>Euro</span> <span>€</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="currency-select btn btn-link" type="button" name="GBP"><span>Pound Sterling</span> <span>£</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="currency-select btn btn-link" type="button" name="USD"><span>US Dollar</span> <span>$</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="hidden" name="code" value="" />
                                        <input type="hidden" name="redirect" value="" /> </form>
                                </div><!-- /.bt-currency -->
                                <ul class="list-inline">
                                    <li><a href="wishlist.html" id="wishlist-total" title="Wish List (0)"><span><i class="fa fa-heart"></i> Wish List (0)</span></a>
                                    </li>
                                    @guest('web')
                                        <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user"></i>My Account</span><i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{route('register')}}"><span>Register</span><span><i class="fa fa-unlock-alt"></i></span></a>
                                                </li>
                                                <li><a href="{{route('login')}}"><span>Login</span><span><i class="fa fa-user"></i></span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user"></i>{{Auth::user()->name}}</span><i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{route('home')}}"><span>Profile</span><span><i class="fa fa-unlock-alt"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        <span>Logout</span><span><i class="fa fa-user"></i></span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>



                                            </ul>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="bt-content-menu" style="float: left; width: 100%; clear: both; height: 1px;"></div>
                    </div>
                </div> <a class="open-bt-mobile"><i class="fa fa-bars"></i></a>
                <div class="bt-mobile">
                    <div class="menu_mobile"> <a class="close-panel"><i class="fa fa-times-circle"></i></a>
                        <div class="bt-language">
                            <form method="post" enctype="multipart/form-data" class="language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <span><img src="{{url('/')}}/images/flags/gb.png" alt="English" title="English"></span> <span>en</span><i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/en"><span class="text-left">English</span><span class="text-right"><img src="{{url('/')}}/images/flags/gb.png" alt="English" title="English" /></span></a>
                                        </li>
                                        <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/de"><span class="text-left">Deutsch</span><span class="text-right"><img src="{{url('/')}}/images/flags/de.png" alt="Deutsch" title="Deutsch" /></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="" /> </form>
                        </div><!-- /.bt-language -->
                        <div class="bt-currency">
                            <form method="post" enctype="multipart/form-data" class="currency">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>$</strong> <span>USD</span> <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="currency-select btn btn-link" type="button" name="EUR"><span>Euro</span> <span>€</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link" type="button" name="GBP"><span>Pound Sterling</span> <span>£</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link" type="button" name="USD"><span>US Dollar</span> <span>$</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="" /> </form>
                        </div><!-- /.bt-currency -->
                        <div class="logged-link"> <a href="{{route('login')}}"><i class="fa fa-sign-in"></i><span>Sign In</span></a> <a href="{{route('register')}}"><i class="fa fa-hand-o-up"></i><span>Join for Free</span></a> </div>
                        <div class="menubar">
                            <div class="container">
                                <div class="bt_mainmenu">
                                    <div class="row">
                                        <div class="nav-heading"> <a class="open-panel"><b>MENU</b><span><i class="fa fa-bars"></i></span></a> </div>
                                        <nav class="mega-menu"> <a class="close-panel"><i class="fa fa-times-circle"></i></a>
                                            <ul class="nav nav-pills">
                                                <li class="parent">
                                                    <p class="plus visible-xs">+</p> <a href="index-2.html"><span class="menu-title">Home</span></a>

                                                </li>
                                                <li class="parent">
                                                    <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Medical Devices</span><i class="fa fa-angle-down"></i></a>
                                                    <div class="dropdown drop-grid-6-6">
                                                        <div class="menu-row row-col-6">
                                                            <div class="menu-column row-grid-2">
                                                                <!-- html-->
                                                                <div class="staticblock">
                                                                    <a title="Drug" href="index-2.html"><img src="{{url('/')}}/images/logo.png" title="Drug" alt="Drug">
                                                                    </a>
                                                                    <p>Metallic round sunglasses powder blue loafer Prada Saffiano button up print. Crop Saint Laurent lilac sports luxe strong eyebrows la marinière razor pleats shoe statement gold collar. Floral bandeau envelope clutch dove grey Jil Sander Vasari dress. Leggings Lanvin Jil Sander Vasari texture collarless grunge leather tote.</p>
                                                                </div>
                                                            </div>
                                                            <div class="menu-column row-grid-1">
                                                                <a href="#" class="parent">Beauty</a>
                                                                <ul class="column category">
                                                                    <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_66">fragrance</a>
                                                                                </li>
                                                                                <li><a href="#_67">hair care</a>
                                                                                </li>
                                                                                <li><a href="#_68">skin care</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_65">nutritional bars</a>
                                                                                </li>
                                                                                <li><a href="#_64">sports nutrition</a>
                                                                                </li>
                                                                                <li><a href="#_63">weight loss</a>
                                                                                </li>
                                                                                <li><a href="#_62">yoga &amp; pilates</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-column row-grid-1">
                                                                <a href="#" class="parent">Personal Care</a>
                                                                <ul class="column category">
                                                                    <li class="col-grid-1 "> <a href="#">hair regrowth</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">ear care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">foot care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">oral care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">sun care</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-column row-grid-1">
                                                                <!-- information -->
                                                                <ul class="column information">
                                                                    <li class="col-grid-1"><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/about.html">About Us</a>
                                                                    </li>
                                                                    <li class="col-grid-1"><a href="#">Privacy Policy</a>
                                                                    </li>
                                                                    <li class="col-grid-1"><a href="#">Terms &amp; Conditions</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-column row-grid-1">
                                                                <ul class="column product">
                                                                    <!-- product -->
                                                                    <li class="col-grid-1">

                                                                        <div class="image">
                                                                            <a href="product-detail.html"><img src="{{url('/')}}/images/product/p8-170x204.jpg" alt="Comotomo" />
                                                                            </a>
                                                                            <br/>
                                                                        </div>
                                                                        <div class="name"><a href="product-detail.html">Comotomo</a>
                                                                            <br />
                                                                        </div>
                                                                        <div class="price"> $337.99 </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="parent">
                                                    <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Vaccines, Blood &amp; Biologics</span><i class="fa fa-angle-down"></i></a>
                                                    <div class="dropdown drop-grid-6-3">
                                                        <div class="menu-row row-col-3"> <img alt="bg image" src="{{url('/')}}/images/bg_menu.jpg" class="row-bg-image bt-menu-bg">
                                                            <div class="menu-column row-grid-1">
                                                                <a href="#" class="parent">Beauty</a>
                                                                <ul class="column category">
                                                                    <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_66">fragrance</a>
                                                                                </li>
                                                                                <li><a href="#_67">hair care</a>
                                                                                </li>
                                                                                <li><a href="#_68">skin care</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_65">nutritional bars</a>
                                                                                </li>
                                                                                <li><a href="#_64">sports nutrition</a>
                                                                                </li>
                                                                                <li><a href="#_63">weight loss</a>
                                                                                </li>
                                                                                <li><a href="#_62">yoga &amp; pilates</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-column row-grid-1">
                                                                <a href="#" class="parent">Beauty</a>
                                                                <ul class="column category">
                                                                    <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_66">fragrance</a>
                                                                                </li>
                                                                                <li><a href="#_67">hair care</a>
                                                                                </li>
                                                                                <li><a href="#_68">skin care</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_65">nutritional bars</a>
                                                                                </li>
                                                                                <li><a href="#_64">sports nutrition</a>
                                                                                </li>
                                                                                <li><a href="#_63">weight loss</a>
                                                                                </li>
                                                                                <li><a href="#_62">yoga &amp; pilates</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="parent">
                                                    <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Cosmetics</span><i class="fa fa-angle-down"></i></a>
                                                    <div class="dropdown drop-grid-6-1">
                                                        <div class="menu-row row-col-1">
                                                            <div class="menu-column row-grid-1">
                                                                <a href="#" class="parent">Personal Care</a>
                                                                <ul class="column category">
                                                                    <li class="col-grid-1 "> <a href="#">hair regrowth</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">ear care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">foot care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">oral care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">sun care</a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="parent">
                                                    <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Services</span><i class="fa fa-angle-down"></i></a>
                                                    <div class="dropdown drop-grid-6-6">
                                                        <div class="menu-row row-col-6">
                                                            <div class="menu-column row-grid-2">
                                                                <!-- html-->
                                                                <div class="staticblock">
                                                                    <a title="Drug" href="index-2.html"><img src="{{url('/')}}/images/logo.png" title="Drug" alt="Drug">
                                                                    </a>
                                                                    <p>Metallic round sunglasses powder blue loafer Prada Saffiano button up print. Crop Saint Laurent lilac sports luxe strong eyebrows la marinière razor pleats shoe statement gold collar. Floral bandeau envelope clutch dove grey Jil Sander Vasari dress. Leggings Lanvin Jil Sander Vasari texture collarless grunge leather tote.</p>
                                                                </div>
                                                            </div>
                                                            <div class="menu-column row-grid-1">
                                                                <a href="#" class="parent">Personal Care</a>
                                                                <ul class="column category">
                                                                    <li class="col-grid-1 "> <a href="#">hair regrowth</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">ear care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">foot care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">oral care</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">sun care</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-column row-grid-1">
                                                                <a href="#" class="parent">Beauty</a>
                                                                <ul class="column category">
                                                                    <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_66">fragrance</a>
                                                                                </li>
                                                                                <li><a href="#_67">hair care</a>
                                                                                </li>
                                                                                <li><a href="#_68">skin care</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                        <div class="sub_menu">
                                                                            <ul>
                                                                                <li><a href="#_65">nutritional bars</a>
                                                                                </li>
                                                                                <li><a href="#_64">sports nutrition</a>
                                                                                </li>
                                                                                <li><a href="#_63">weight loss</a>
                                                                                </li>
                                                                                <li><a href="#_62">yoga &amp; pilates</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                    <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-column row-grid-2">
                                                                <!-- html-->
                                                                <div class="staticblock">
                                                                    <iframe src="http://player.vimeo.com/video/32448092" height="360" width="640"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li> <a href="#"><span class="menu-title">Bulk Order</span></a> </li>
                                                <li> <a href="blog.html"><span class="menu-title">Blog</span></a> </li>
                                            </ul>
                                        </nav><!-- /.mega-menu -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.menubar -->
                    </div>
                </div><!-- /.bt-mobile -->
                <header>
                    <div class="container">
                        <div class="row">
                            <div id="logo">
                                <a href="index-2.html"><img src="{{url('/')}}/images/logo.png" title="Drug Store" alt="Drug Store" class="img-responsive" />
                                </a>
                            </div>
                            <div id="cart" class="btn-group btn-block">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">2 item(s) - $316.00</span>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td class="text-left image">
                                                            <div class="image">
                                                                <a href="product-detail.html"><img src="{{url('/')}}/images/product/p21-115x131.jpg" alt="Cashmere cuff vintage Levi maxi" title="Cashmere cuff vintage Levi maxi" class="img-thumbnail" />
                                                                </a>
                                                                <div class="remove">
                                                                    <button type="button" title="Remove" class="btn-danger"><i class="fa fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left name">
                                                            <a href="product-detail.html">Cashmere cuff vintage Levi maxi</a>
                                                            <br /> - <small>Color Pink</small>
                                                            <div>2 x <span class="price">$316.00</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </li>
                                            <li>
                                                <div class="cart_bottom">
                                                    <table class="minicart_total">
                                                        <tr>
                                                            <td class="text-left"><span>Sub-Total</span>
                                                            </td>
                                                            <td class="text-right">$260.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><span>Eco Tax (-2.00)</span>
                                                            </td>
                                                            <td class="text-right">$4.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><span>VAT (20%)</span>
                                                            </td>
                                                            <td class="text-right">$52.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><span>Total</span>
                                                            </td>
                                                            <td class="text-right">$316.00</td>
                                                        </tr>
                                                    </table>
                                                    <div class="buttons">
                                                        <span class="cart_bt"><a href="cart.html" class="btn">View Cart</a></span>
                                                        <span class="checkout_bt"><a class="btn btn-shopping" href="checkout.html">Checkout</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div><!-- /#cart -->
                            <div id="boss-search" class="fourteen columns omega">
                                <div class="choose-select">
                                    <div class="input_cat">
                                        <select name="filter_category_id" id="boss_filter_search">
                                            <option value="0" selected="selected">All Categories</option>
                                            <option value="34">Medicine &amp; Health</option>
                                            <option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal Care</option>
                                            <option value="57">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; hair regrowth</option>
                                            <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ear care</option>
                                            <option value="17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foot care</option>
                                            <option value="18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oral care</option>
                                            <option value="33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sun care</option>
                                            <option value="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;medicine</option>
                                            <option value="51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allergy &amp; sinus</option>
                                            <option value="52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eye care</option>
                                            <option value="53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;first aid</option>
                                            <option value="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pharmacy </option>
                                            <option value="54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep &amp; snoring aids</option>
                                            <option value="27">household</option>
                                            <option value="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; appliances</option>
                                            <option value="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;electronics</option>
                                            <option value="25">Beauty</option>
                                            <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bath &amp; spa</option>
                                            <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cosmetics</option>
                                            <option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fragrance</option>
                                            <option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hair care</option>
                                            <option value="68">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skin care</option>
                                            <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet &amp; Fitness</option>
                                            <option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nutritional bars</option>
                                            <option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sports nutrition</option>
                                            <option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weight loss</option>
                                            <option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yoga &amp; pilates</option>
                                            <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;international beauty</option>
                                            <option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;natural &amp; organic</option>
                                            <option value="69">Baby Needs</option>
                                            <option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Children's Healthcare</option>
                                            <option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vitamins</option>
                                            <option value="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; natural baby</option>
                                            <option value="72">Women's</option>
                                            <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;feminine care</option>
                                            <option value="73">Vaccines</option>
                                        </select>
                                    </div>
                                    <div class="search-form">
                                        <div id="search" class="input-group">
                                            <input type="text" name="search" value="" placeholder="Search here..." class="form-control input-lg" />
                                            <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                                          </span> </div>
                                    </div>
                                </div>
                            </div><!-- /#boss-search -->
                        </div>
                    </div>
                </header>

                <div class="boss-new-position">
                    <div class="boss_header">
                        <div class="container">
                            <div class="row">
                                <div class="menu">
                                    <!-- Load menu -->
                                    <div class="menubar">
                                        <div class="container">
                                            <div class="bt_mainmenu">
                                                <div class="row">
                                                    <div class="nav-heading"> <a class="open-panel"><b>MENU</b><span><i class="fa fa-bars"></i></span></a> </div>
                                                    <nav class="mega-menu"> <a class="close-panel"><i class="fa fa-times-circle"></i></a>
                                                        <ul class="nav nav-pills">
                                                            <li class="parent">
                                                                <p class="plus visible-xs">+</p> <a href="index-2.html"><span class="menu-title">Home</span></a>
                                                            </li>
                                                            <li class="parent">
                                                                <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Medical Devices</span><i class="fa fa-angle-down"></i></a>
                                                                <div class="dropdown drop-grid-6-6">
                                                                    <div class="menu-row row-col-6">
                                                                        <div class="menu-column row-grid-2">
                                                                            <!-- html-->
                                                                            <div class="staticblock">
                                                                                <a title="Drug" href="index-2.html"><img src="{{url('/')}}/images/logo.png" title="Drug" alt="Drug">
                                                                                </a>
                                                                                <p>Metallic round sunglasses powder blue loafer Prada Saffiano button up print. Crop Saint Laurent lilac sports luxe strong eyebrows la marinière razor pleats shoe statement gold collar. Floral bandeau envelope clutch dove grey Jil Sander Vasari dress. Leggings Lanvin Jil Sander Vasari texture collarless grunge leather tote.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-column row-grid-1">
                                                                            <a href="#" class="parent">Beauty</a>
                                                                            <ul class="column category">
                                                                                <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_66">fragrance</a>
                                                                                            </li>
                                                                                            <li><a href="#_67">hair care</a>
                                                                                            </li>
                                                                                            <li><a href="#_68">skin care</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_65">nutritional bars</a>
                                                                                            </li>
                                                                                            <li><a href="#_64">sports nutrition</a>
                                                                                            </li>
                                                                                            <li><a href="#_63">weight loss</a>
                                                                                            </li>
                                                                                            <li><a href="#_62">yoga &amp; pilates</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="menu-column row-grid-1">
                                                                            <a href="#" class="parent">Personal Care</a>
                                                                            <ul class="column category">
                                                                                <li class="col-grid-1 "> <a href="#">hair regrowth</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">ear care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">foot care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">oral care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">sun care</a> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="menu-column row-grid-1">
                                                                            <!-- information -->
                                                                            <ul class="column information">
                                                                                <li class="col-grid-1"><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/about.html">About Us</a>
                                                                                </li>
                                                                                <li class="col-grid-1"><a href="#">Privacy Policy</a>
                                                                                </li>
                                                                                <li class="col-grid-1"><a href="#">Terms &amp; Conditions</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="menu-column row-grid-1">
                                                                            <ul class="column product">
                                                                                <!-- product -->
                                                                                <li class="col-grid-1">

                                                                                    <div class="image">
                                                                                        <a href="product-detail.html"><img src="{{url('/')}}/images/product/p8-170x204.jpg" alt="Comotomo" />
                                                                                        </a>
                                                                                        <br/>
                                                                                    </div>
                                                                                    <div class="name"><a href="product-detail.html">Comotomo</a>
                                                                                        <br />
                                                                                    </div>
                                                                                    <div class="price"> $337.99 </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="parent">
                                                                <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Vaccines, Blood &amp; Biologics</span><i class="fa fa-angle-down"></i></a>
                                                                <div class="dropdown drop-grid-6-3">
                                                                    <div class="menu-row row-col-3"> <img alt="bg image" src="{{url('/')}}/images/bg_menu.jpg" class="row-bg-image bt-menu-bg">
                                                                        <div class="menu-column row-grid-1">
                                                                            <a href="#" class="parent">Beauty</a>
                                                                            <ul class="column category">
                                                                                <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_66">fragrance</a>
                                                                                            </li>
                                                                                            <li><a href="#_67">hair care</a>
                                                                                            </li>
                                                                                            <li><a href="#_68">skin care</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_65">nutritional bars</a>
                                                                                            </li>
                                                                                            <li><a href="#_64">sports nutrition</a>
                                                                                            </li>
                                                                                            <li><a href="#_63">weight loss</a>
                                                                                            </li>
                                                                                            <li><a href="#_62">yoga &amp; pilates</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="menu-column row-grid-1">
                                                                            <a href="#" class="parent">Beauty</a>
                                                                            <ul class="column category">
                                                                                <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_66">fragrance</a>
                                                                                            </li>
                                                                                            <li><a href="#_67">hair care</a>
                                                                                            </li>
                                                                                            <li><a href="#_68">skin care</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_65">nutritional bars</a>
                                                                                            </li>
                                                                                            <li><a href="#_64">sports nutrition</a>
                                                                                            </li>
                                                                                            <li><a href="#_63">weight loss</a>
                                                                                            </li>
                                                                                            <li><a href="#_62">yoga &amp; pilates</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="parent">
                                                                <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Cosmetics</span><i class="fa fa-angle-down"></i></a>
                                                                <div class="dropdown drop-grid-6-1">
                                                                    <div class="menu-row row-col-1">
                                                                        <div class="menu-column row-grid-1">
                                                                            <a href="#" class="parent">Personal Care</a>
                                                                            <ul class="column category">
                                                                                <li class="col-grid-1 "> <a href="#">hair regrowth</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">ear care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">foot care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">oral care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">sun care</a> </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="parent">
                                                                <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Services</span><i class="fa fa-angle-down"></i></a>
                                                                <div class="dropdown drop-grid-6-6">
                                                                    <div class="menu-row row-col-6">
                                                                        <div class="menu-column row-grid-2">
                                                                            <!-- html-->
                                                                            <div class="staticblock">
                                                                                <a title="Drug" href="index-2.html"><img src="{{url('/')}}/images/logo.png" title="Drug" alt="Drug">
                                                                                </a>
                                                                                <p>Metallic round sunglasses powder blue loafer Prada Saffiano button up print. Crop Saint Laurent lilac sports luxe strong eyebrows la marinière razor pleats shoe statement gold collar. Floral bandeau envelope clutch dove grey Jil Sander Vasari dress. Leggings Lanvin Jil Sander Vasari texture collarless grunge leather tote.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-column row-grid-1">
                                                                            <a href="#" class="parent">Personal Care</a>
                                                                            <ul class="column category">
                                                                                <li class="col-grid-1 "> <a href="#">hair regrowth</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">ear care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">foot care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">oral care</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">sun care</a> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="menu-column row-grid-1">
                                                                            <a href="#" class="parent">Beauty</a>
                                                                            <ul class="column category">
                                                                                <li class="col-grid-1 "> <a href="#">bath &amp; spa</a> </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Cosmetics<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_66">fragrance</a>
                                                                                            </li>
                                                                                            <li><a href="#_67">hair care</a>
                                                                                            </li>
                                                                                            <li><a href="#_68">skin care</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 sub_category"> <a href="#">Diet &amp; Fitness<i class="fa fa-angle-right"></i></a>
                                                                                    <div class="sub_menu">
                                                                                        <ul>
                                                                                            <li><a href="#_65">nutritional bars</a>
                                                                                            </li>
                                                                                            <li><a href="#_64">sports nutrition</a>
                                                                                            </li>
                                                                                            <li><a href="#_63">weight loss</a>
                                                                                            </li>
                                                                                            <li><a href="#_62">yoga &amp; pilates</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="col-grid-1 "> <a href="#">international beauty</a> </li>
                                                                                <li class="col-grid-1 "> <a href="#">natural &amp; organic</a> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="menu-column row-grid-2">
                                                                            <!-- html-->
                                                                            <div class="staticblock">
                                                                                <iframe src="http://player.vimeo.com/video/32448092" height="360" width="640"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li> <a href="#"><span class="menu-title">Bulk Order</span></a> </li>
                                                            <li> <a href="blog.html"><span class="menu-title">Blog</span></a> </li>
                                                        </ul>
                                                    </nav><!-- /.mega-menu -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.menubar -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.boss_header -->
                </div><!-- /.boss-new-position -->
            </div><!-- /#bt_header -->

@hasSection('content')
    <div class="container">
        <div class="row">
            <section id="column-left" class="col-sm-3 hidden-xs">

@section('sidebar')
@show

            </section><!-- /#column-left -->
            <div id="content" class="col-sm-9">
@yield('content')
            </div><!-- /#content -->
            <div id="tags-load"><i class="fa fa-spinner fa-pulse fa-2x"></i>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
@endif

@hasSection('fullWidth')
    <div class="container">
        <div class="row">
            @yield('fullWidth')
        </div>
    </div>
@endif

    <!-- /.Footer Section -->
            <div id="bt_footer" class="">
                <footer>
                    <div class="bt-footer-middle">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bt-block-footer col-sm-4 col-xs-12">
                                        <div class="col-xs-12">
                                            <a href="index-2.html"><img src="{{url('/')}}/images/logo.png" title="Drug Store" alt="Drug Store" class="img-responsive" />
                                            </a>
                                            <p>Skort Maison Martin Margiela knot ponytail cami texture tucked t-shirt.<span class="bold-italic"> Black skirt razor pleats plaited gold collar.</span> Crop 90s spearminit indigo seam luxe washed out. Prada Saffiano cashmere crop sneaker chignon cami clutch cami texture Maison Martin Margiela knot ponytail.</p>
                                            <div class="footer-contact">
                                                <ul>
                                                    <li><i class="fa fa-map-marker"></i> <span> &nbsp;249, Ung Van Khiem St., Binh Thanh Dist, HCMC.</span>
                                                    </li>
                                                    <li><i class="fa fa-phone"></i> <span>+0 123456789</span>
                                                    </li>
                                                    <li><i class="fa fa-envelope-o"></i> <span><a href="#">support@example.com</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.col-sm-4 -->
                                    <div class="col-sm-4 col-xs-12">
                                        <!--Load modules in position footer middle-->
                                        <div class="bt-contact-me">
                                            <div class="box-heading">
                                                <h3>Quick Contact</h3>
                                            </div>
                                            <div class="box-content">
                                                <form id="contact" class="frm_contact">
                                                    <div class="input-name">
                                                        <input class="form-control " size="25" type="text" value="" placeholder="Your Name" name="contact_name" id="contact_name" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue" /> </div>
                                                    <div class="input-email">
                                                        <input class="form-control" size="25" type="text" value="" placeholder="Your Email" name="contact_mail" id="contact_mail" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue"> </div>
                                                    <div class="input-message">
                                                        <textarea class="form-control" name="contact_msg" placeholder="Your Message" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue"></textarea>
                                                    </div> <a class="btn btn-primary" id="b_button_contact">Send</a>
                                                    <div id="contact_result"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- /.col-sm-4 -->
                                    <div class="col-sm-4 col-xs-12">
                                        <!--Load modules in position footer newsletter-->
                                        <div class="bt-newsletter">
                                            <div class="footer-newsletter">
                                                <div class="title">
                                                    <h3>Newsletter Signup</h3>
                                                    <p>Enter your email and we'll send you a coupon with 10% off your next order. Add your text here</p>
                                                </div>
                                                <div>
                                                    <div class="newsletter-content">
                                                        <div id="frm_subscribe">
                                                            <form name="subscribe" id="subscribe">
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="boss-newsletter">
                                                                                <input class="form-control input-new" size="50" type="text" placeholder="Enter your email address here" name="subscribe_email" id="subscribe_email"> <a class="btn btn-new"><i class="fa fa-paper-plane"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr style="display:none;">
                                                                        <td>
                                                                            <input class="form-control input-new" size="50" type="text" value="Enter your email address here" name="subscribe_name" id="subscribe_name">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id="subscribe_result"></td>
                                                                    </tr>
                                                                </table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col-sm-4 -->
                                    <div class="footer-social col-xs-4">
                                        <h3>Follow us</h3>
                                        <ul>
                                            <li><a class="facebook" href="https://www.facebook.com/" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a class="pinterest" href="https://www.pinterest.com/" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a class="twitter" href="https://twitter.com/" title="Twiter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a class="google" href="https://plus.google.com/" title="Google plus"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a class="rss" href="https://www.rss.com/" title="RSS"><i class="fa fa-rss"></i></a>
                                            </li>
                                            <li><a class="youtube" href="https://www.youtube.com/" title="YouTube"><i class="fa fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div><!-- /.col-sm-4 -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.bt-footer-middle -->
                    <div class="bt-footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="link">
                                    <ul class="list-unstyled">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Site Map</a></li>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </div>
                                <div class="powered-payment">
                                    <div class="row">
                                        <div class="powered col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div id="powered">
                                                <p>© 2017 Drug Store. All rights Reserved.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <ul>
                                                <li>
                                                    <a title="Visa" href="#" class="visa"><img alt="Visa" src="{{url('/')}}/images/visa.jpg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="MasterCard" href="#" class="masterCard"><img alt="MasterCard" src="{{url('/')}}/images/master_card.jpg" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="Paypal" href="#" class="paypal"><img alt="Paypal" src="{{url('/')}}/images/paypal.jpg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="Merican" href="#" class="merican"><img alt="Merican" src="{{url('/')}}/images/american.jpg" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="DHL" href="#" class="dhl"><img alt="DHL" src="{{url('/')}}/images/dhl.jpg">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.powered-payment -->
                            </div>
                        </div>
                    </div><!-- /.bt-footer-bottom -->
                </footer>
            </div><!-- /#bt_footer -->

            <div id="back_top" class="back_top" title="Back To Top"><span><i class="fa fa-angle-up"></i></span></div>

            <div aria-hidden="true" role="dialog" tabindex="-1" class="modal fade" id="myModal">
                <div style="width: 95%; max-width: 900px;" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" title="Close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div id="notification"></div>
                            <div id="modal-content">
                                <div class="product-info-qs product-info">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="bt-product-zoom">
                                                <div class="image">
                                                    <a href="images/product/p2-600x702.jpg" title="Baby Bottle" class="cloud-zoom" id="zoomqs" rel=""><img style="display: block;" src="{{url('/')}}/images/product/p2-550x652.jpg" title="Baby Bottle" alt="Baby Bottle" id="image">
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="product-name">
                                                <h1>Baby Bottle</h1> </div>
                                            <div class="description"> Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. iaculis et blandit eget, tristique id risus. iaculis et blandit eget, tristique id risus.</div>
    										<div class="product_info_list">
    											<ul>
    												<li>Fusce ut pellentesque</li>
    												<li>Fusce ut pellentesque</li>
    												<li>Fusce ut pellentesque</li>
    												<li>Fusce ut pellentesque</li>
    												<li>Fusce ut pellentesque</li>
    											</ul>
    										</div>
                                            <div class="price_info"> <span class="price">$122.00</span> </div>
                                            <div class="button-group">
                                                <button class="btn-cart" type="button">Add to Cart</button>
                                                <div class="wishlist-compare">
                                                    <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i> </button>
                                                    <button class="btn-compare" type="button" title="Compare this Product"><i class="fa fa-retweet"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="viewdetail"> <a href="product-detail.html">View Detail &gt;&gt;</a> </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="image-additional">
                                                <ul id="boss_image_additional">
                                                    <li>
                                                        <a href="images/product/p2-600x702.jpg" title="Baby Bottle" class="cloud-zoom-gallery" rel="useZoom: 'zoomqs', smallImage: 'images/product/p2-550x652.jpg' "><img src="{{url('/')}}/images/product/p2-101x125.jpg" title="Baby Bottle" alt="Baby Bottle">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="images/product/p5-600x702.jpg" title="Baby Bottle" class="cloud-zoom-gallery" rel="useZoom: 'zoomqs', smallImage: 'images/product/p5-550x652.jpg' "><img src="{{url('/')}}/images/product/p5-101x125.jpg" title="Baby Bottle" alt="Baby Bottle">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="images/product/p4-600x702.jpg" title="Baby Bottle" class="cloud-zoom-gallery" rel="useZoom: 'zoomqs', smallImage: 'images/product/p4-550x652.jpg' "><img src="{{url('/')}}/images/product/p4-101x125.jpg" title="Baby Bottle" alt="Baby Bottle">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="images/product/p10-600x702.jpg" title="Baby Bottle" class="cloud-zoom-gallery" rel="useZoom: 'zoomqs', smallImage: 'images/product/p10-550x652.jpg' "><img src="{{url('/')}}/images/product/p10-101x125.jpg" title="Baby Bottle" alt="Baby Bottle">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="images/product/p7-600x702.jpg" title="Baby Bottle" class="cloud-zoom-gallery" rel="useZoom: 'zoomqs', smallImage: 'images/product/p7-550x652.jpg' "><img src="{{url('/')}}/images/product/p7-101x125.jpg" title="Baby Bottle" alt="Baby Bottle">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="images/product/p19-600x702.jpg" title="Baby Bottle" class="cloud-zoom-gallery" rel="useZoom: 'zoomqs', smallImage: 'images/product/p19-550x652.jpg' "><img src="{{url('/')}}/images/product/p19-101x125.jpg" title="Baby Bottle" alt="Baby Bottle">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.image-additional -->
                                        </div>
                                    </div>
                                </div><!-- /.product-info-qs -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /#myModal -->

        </div><!-- /#bt_container -->
    </div>
    <script src="{{url('/')}}/js/app.js"></script>
    <script src="{{url('/')}}/js/all.js"></script>
    {{-- <script src="{{url('/')}}/js/jquery-2.1.1.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js/getwidthbrowser.js"></script>
    <script src="{{url('/')}}/js/cs.bossthemes.js"></script>
    <script src="{{url('/')}}/js/jquery.jgrowl.js"></script>
    <script src="{{url('/')}}/js/jquery.appear.js"></script>
    <script src="{{url('/')}}/js/jquery.smoothscroll.js"></script>
    <script src="{{url('/')}}/js/carouFredSel-6.2.1.js"></script>
    <script src="{{url('/')}}/js/boss_filterproduct.js"></script>
    <script src="{{url('/')}}/js/plugins.js"></script>
    <script src="{{url('/')}}/js/jquery.tools.min.js"></script>
    <script src="{{url('/')}}/js/jquery.revolution.min.js"></script>
    <script src="{{url('/')}}/js/jquery.selectbox-0.2.min.js"></script>
    <script src="{{url('/')}}/js/cloud-zoom.1.0.3.js"></script>
    <script src="{{url('/')}}/js/custom.js"></script> --}}
    <!--[if IE 8]>
    <script type="text/javascript">
    $(window).scroll(function() {
            var height_header = $('#bt_header').height();
            if($('html').scrollTop() > height_header) {
                $('header').addClass('boss_scroll');
            } else {
                $('header').removeClass('boss_scroll');
            }
        });
    </script>
    <![endif]-->
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
@stack('scripts')
</body>

<!-- Mirrored from www.webstrot.com/html/tm/healthshop/01_Drug_Store/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 11:54:07 GMT -->
</html>
