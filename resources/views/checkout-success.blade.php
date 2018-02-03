@extends('layouts.master')
@section('title', 'this is dynamic title')


@section('fullWidth')
    @include('etc.breadcrumb')
    <div id="content" class="col-sm-12">
        <h1>Your order has been placed!</h1>
        <p>Your order has been successfully processed!</p>
        <p>You can view your order history by going to the <a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/account.html">my account</a> page and by clicking on <a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/order.html">history</a>.</p>
        <p>If your purchase has an associated download, you can go to the account <a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/download.html">downloads</a> page to view them.</p>
        <p>Please direct any questions you have to the <a href="contact.html">store owner</a>.</p>
        <p>Thanks for shopping with us online!</p>
        <div class="buttons">
            <div class="pull-left">
                <a href="index-2.html" class="btn btn-blue" style="margin-top:20px;">Continue</a>
            </div>
        </div>
    </div><!-- /#content -->
@endsection
