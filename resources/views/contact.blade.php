@extends('layouts.master')
@section('title', 'this is dynamic title')


@section('fullWidth')
    @include('etc.breadcrumb')
    <div class="col-lg-6">
        <div id="content" class="col-sm-12">
            <h1>Contact Us</h1>
            <h3 class="drug_contect_padding">Our Location</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>Drug Store</strong>
                            <br />
                            <address>Kalani Bag</address>
                        </div>
                        <div class="col-sm-3">
                            <strong>Telephone</strong>
                            <br> +0 123456789
                            <br />
                            <br />
                        </div>
                        <div class="col-sm-3">
                            <strong>Email</strong>
                            <br> <a href="#">web@example.com</a>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <h3>Contact Form</h3>
                    <div class="required">
                        <label class="control-label" for="input-name">Your Name</label>
                        <input type="text" name="name" value="" id="input-name" class="form-control" /> </div>
                    <div class="required">
                        <label class="control-label" for="input-email">E-Mail Address</label>
                        <input type="text" name="email" value="" id="input-email" class="form-control" /> </div>
                    <div class="required">
                        <label class="control-label" for="input-enquiry">Enquiry</label>
                        <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-left">
                        <input class="btn btn-primary" type="submit" value="Submit" />
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /#content -->
    <div class="col-lg-6">
         <!-- Google Map -->
        <div class="google-map">
            <div id="map-canvas"></div>
        </div>
    </div>
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
