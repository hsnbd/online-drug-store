@extends('layouts.master')
@section('title', 'this is dynamic title')


@section('fullWidth')
    @include('etc.breadcrumb')
    <column id="column-left" class="col-sm-3 hidden-xs">
        <div class="box account">
            <div class="box-heading">Account</div>
            <div class="box-content">
                <ul>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/account.html">My Account</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/edit.html">Edit Account</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/password.html">Password</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/address.html">Address Book</a> </li>
                    <li class="active"><a href="wishlist.html">Wish List</a> </li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/download.html">Downloads</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/reward.html">Reward Points</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/return.html">Returns</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/transaction.html">Transactions</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/newsletter.html">Newsletter</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/recurring.html">Recurring payments</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/logout.html">Logout</a></li>
                </ul>
            </div>
        </div>
        <div data-delay="200" data-animate="fadeInLeft" class="bt-banner-left fadeInLeft animated">
            <a title="banner left" href="#"> <img src="images/banner/banner_left.jpg" alt="banner"></a>
            <div class="text-info"> <span class="small-text">02 Products</span> <span class="large-text">BEAUTY</span> <a href="#" class="btn-shopnow">Shop Now</a> </div>
        </div><!-- /.bt-banner-left -->
    </column><!-- /#column-left -->
    <div id="content" class="col-sm-9">
        <h1 class="block-title">My Wish List</h1>
        <div class="wishlist-info">
            <table class="table">
                <thead>
                    <tr>
                        <td class="image" colspan="2">Product Name</td>
                        <td class="model">Model</td>
                        <td class="stock">Stock</td>
                        <td class="product-price">Unit Price</td>
                        <td class="action">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="image">
                            <a href="product-detail.html"><img src="images/product/p2-101x125.jpg" alt="Cashmere cuff vintage Levi maxi" title="Cashmere cuff vintage Levi maxi" />
                            </a>
                        </td>
                        <td class="name"><a href="product-detail.html">Cashmere cuff vintage Levi maxi</a>
                        </td>
                        <td class="model">Product 5</td>
                        <td class="stock">In Stock</td>
                        <td class="product-price">
                            <div class="price"> $122.00 </div>
                        </td>
                        <td class="action">
                            <button type="button" data-toggle="tooltip" title="Add to Cart" class="btn btn-cart"><i class="fa fa-shopping-cart"></i>
                            </button>
                            <a href="#" data-toggle="tooltip" title="Remove" class="btn btn-remove"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="buttons clearfix">
            <div class="pull-right"><a href="index-2.html" class="btn btn-blue">Continue</a></div>
        </div>
    </div><!-- /#content -->
@endsection
