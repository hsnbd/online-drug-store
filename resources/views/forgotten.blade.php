@extends('layouts.master')
@section('title', 'this is dynamic title')


@section('fullWidth')
    @include('etc.breadcrumb')
    <column id="column-left" class="col-sm-3 hidden-xs">
        <div class="box account">
            <div class="box-heading">Account</div>
            <div class="box-content">
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li class="active"><a href="forgotten.html">Forgotten Password</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/account.html">My Account</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/address.html">Address Book</a> </li>
                    <li><a href="wishlist.html">Wish List</a> </li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/order.html">Order History</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/download.html">Downloads</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/reward.html">Reward Points</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/return.html">Returns</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/transaction.html">Transactions</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/newsletter.html">Newsletter</a></li>
                    <li><a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/recurring.html">Recurring payments</a></li>
                </ul>
            </div>
        </div>
        <div data-delay="200" data-animate="fadeInLeft" class="bt-banner-left fadeInLeft animated">
            <a title="banner left" href="#"> <img src="images/banner/banner_left.jpg" alt="banner"></a>
            <div class="text-info"> <span class="small-text">02 Products</span> <span class="large-text">BEAUTY</span> <a href="#" class="btn-shopnow">Shop Now</a> </div>
        </div><!-- /.bt-banner-left -->
    </column><!-- /#column-left -->
    <div id="content" class="col-sm-9">
        <h1 class="block-title">Forgot Your Password?</h1>
        <p>Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.</p>
        <form method="post" enctype="multipart/form-data" class="form-horizontal">
            <fieldset>
                <h3>Your E-Mail Address</h3>
                <div class="required">
                    <label class="control-label" for="input-email">E-Mail Address</label>
                    <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" />
                </div>
            </fieldset>
            <div class="buttons clearfix">
                <div class="pull-right">
                    <a href="login.html" class="btn btn-gray">Back</a>
                    <input type="submit" value="Continue" class="btn btn-blue" />
                </div>
            </div>
        </form>
    </div><!-- /#content -->
@endsection


@push('scripts')
    <script>
        jQuery(document).ready(function() {
            /* View Mode */
            // Article List
            $('#list-view').on('click',function() {
                $('#content .article-layout').attr('class', 'article-layout article-list col-xs-12');
                localStorage.setItem('display', 'list');
            });
            // Article Grid
            $('#grid-view').on('click',function() {
                // What a shame bootstrap does not take into account dynamically loaded columns
                cols = $('#column-right, #column-left').length;
                if (cols == 2) {
                    $('#content .article-layout').attr('class', 'article-layout article-grid col-md-6 col-xs-12');
                } else if (cols == 1) {
                    $('#content .article-layout').attr('class', 'article-layout article-grid col-md-4 col-sm-6 col-xs-12');
                } else {
                    $('#content .article-layout').attr('class', 'article-layout article-grid col-md-3 col-sm-4 col-xs-12');
                }
                localStorage.setItem('display', 'grid');
            });
            if (localStorage.getItem('display') == 'list') {
                $('#list-view').trigger('click');
            } else {
                $('#grid-view').trigger('click');
            }
        });
    </script>
@endpush
