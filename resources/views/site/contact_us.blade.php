@extends('layouts/template')

@section('main')



        <!-- CONTACT START -->
        <section id="contact">
            <div class="container" id="contact-details-wrapper">
                {{--{{ Config::get('app.locale') }}--}}
                <?php
                    $language = (Config::get('app.locale'));
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="fancy"><span></span></p>
                    </div>
                </div>
                <div id="contact-details" style="padding: 0px 30px">
                    <div class="row">
                        <div class="desc col-xs-12 col-sm-6 intro">
                            <p class="fancy"><span>{{ trans('contact_page.con_head') }}</span></p>
                        </div>
                    </div>
                    <!-- CONTACT HAS 2 OPTIONS: Form based (option 1) and Address/Phone/Social (option 2) -->
                    <div class="row">
                        <!-- CONTACT OPTION 1 START -->
                        <div class="option col-lg-5 col-md-6 col-sm-6">

                            <div style="text-align: left" class="article_content">
                                <div class="media">
                                    <i class="pull-left ion-ios7-location-outline fa-2x text-muted"></i>
                                    <div class="media-body">
                                        <address>
                                            <strong>{{ trans('contact_page.con_name') }}</strong><br>
                                            {{ trans('contact_page.con_address_1') }}
                                            <br>
                                            {{ trans('contact_page.con_address_2') }}
                                        </address>
                                    </div>
                                </div>
                                <div class="media">
                                    <i class="pull-left ion-ios7-telephone-outline fa-2x text-muted"></i>
                                    <div class="media-body">
                                        <p>{{ trans('contact_page.con_fax') }} 02-530-2199</p>
                                        <p>{{ trans('contact_page.con_mobile') }} 098-287-7287, 090-004-6331</p>
                                        <p>
                                            {{ trans('contact_page.con_email') }}
                                            <a class="article_link" href="mailto:aecnursinghome.th@gmail.com">aecnursinghome.th@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <hr>
                                    </div>
                                </div>
                            </div>


                            <!-- CONTACT FORM START -->
                            <form role="form" id="contact-form" action="{{ url('contact-us') }}" method="POST" onsubmit="return validateForms()" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ trans('contact_page.name') }}" onfocus="this.placeholder=''" onblur="this.placeholder='{{ trans('contact_page.name') }}'">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ trans('contact_page.email') }}" onfocus="this.placeholder=''" onblur="this.placeholder='{{ trans('contact_page.email') }}'">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="8" name="message" id="message" placeholder="{{ trans('contact_page.message') }}" onfocus="this.placeholder=''" onblur="this.placeholder='{{ trans('contact_page.message') }}'"></textarea>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label>--}}
                                            {{--<input type="checkbox" value="1" name="newsletter" id="newsletter" checked style="float: none;">--}}
                                            {{--{{ trans('contact_page.copy') }}--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    {{--<a class="btn btn-orange btn-half-block" id="submit-contact-form">Send</a>--}}
                                    {{--<a class="btn btn-orange" id="submit-contact-form">Send</a>--}}
                                    <button type="submit" name="submit" class="btn btn-orange" id="submit-contact-form">{{ trans('contact_page.send') }}</button>
                                </div>
                            </form>
                            <!-- CONTACT FORM END -->
                            <div class="alert alert-success alert-small" id="contact-success" style="display: none;"><i class="ion-checkmark-round"></i> <span>Message sent.</span></div>
                            <div class="alert alert-danger alert-small" id="contact-error" style="display: none;"><i class="ion-close-round"></i> <span>Something is not working. Please try again.</span></div>
                        </div>
                        <!-- CONTACT OPTION 1 END -->


                        <!-- CONTACT OPTION 2 START -->
                        <div class="option col-lg-7 col-md-6 col-sm6">
                            <div class="media">
                                <div class="media-body">
                                    <?php
                                        if( \Illuminate\Support\Facades\Session::get('locale') == 'th' || \Illuminate\Support\Facades\Session::get('locale') == ''){ ?>
                                        <a class="fancybox-effects-a" href="{{ url('assets/images/Map1.jpg') }}">
                                            <img src="{{ url('assets/images/Map1.jpg') }}" alt="">
                                        </a>
                                    <?php    }else{ ?>
                                        <a class="fancybox-effects-a" href="{{ url('assets/images/Map_eng.jpg') }}">
                                            <img src="{{ url('assets/images/Map_eng.jpg') }}" alt="">
                                        </a>
                                    <?php    }
                                    ?>
                                    {{--<a class="fancybox-effects-a" href="{{ url('assets/images/Map1.jpg') }}">--}}
                                        {{--<img src="{{ url('assets/images/Map1.jpg') }}" alt="">--}}
                                    {{--</a>--}}
                                    {{--<a href="{{ url('assets/images/Map1.jpg') }}">--}}
                                        {{--<img src="{{ url('assets/images/Map1.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<div id="ninja-slider">--}}
                                        {{--<div class="slider-inner">--}}
                                            {{--<ul>--}}
                                                {{--<li>--}}
                                                    {{--<a class="ns-img" href="{{ url('assets/images/Map1.jpg') }}"></a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="fs-icon" title="Expand/Close"></div>--}}
                                        {{--</div>--}}
                                    <p>
                                        <a href="https://www.google.co.th/maps/place/A.E.C.+School+(ASIA+ELDERLY+%26+CHILD+CARE+SCHOOL/@13.7889795,100.594976,17z/data=!4m12!1m6!3m5!1s0x30e29de8000443ed:0x708c13476fedd5bd!2sA.E.C.+School+(ASIA+ELDERLY+%26+CHILD+CARE+SCHOOL!8m2!3d13.7889743!4d100.5971647!3m4!1s0x30e29de8000443ed:0x708c13476fedd5bd!8m2!3d13.7889743!4d100.5971647!6m1!1e1" target="_blank" class="btn btn-link btn-default">{{ trans('contact_page.map') }} <i class="fa fa-angle-right"></i></a>
                                    </p>
                                </div>
                                <div class="article_content"><strong>{{ trans('contact_page.line') }}</strong></div>
                                <div><a href="https://line.me/R/ti/p/%40mzm5743z" target="_blank"><img src="{{url('assets/images/line_id.png')}}"></a></div>
                            </div>
                        </div>
                        <!-- CONTACT OPTION 2 END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTACT END -->

    <script>

        /*
         *  Different effects FancyBox
         */

        // Change title type, overlay closing speed
        $(".fancybox-effects-a").fancybox({
            helpers: {
                title : {
                    type : 'outside'
                },
                overlay : {
                    speedOut : 0
                }
            }
        });

        // function validate form
        function validateForms() {

            var fields = $("#contact-form").serializeArray();
            var len = fields.length, dataObj = {};
            for (var i = 0; i < len; i++) {
                dataObj[fields[i].name] = fields[i].value;
            }

            if(dataObj['name'] === '' && dataObj['email'] === '' && dataObj['message'] === ''){
                return false;
            }

            if(dataObj['email'] === '' && dataObj['message'] === ''){
                return false;
            }

            if(dataObj['name'] === '' && dataObj['message'] === ''){
                return false;
            }

            if(dataObj['name'] === '' && dataObj['email'] === ''){
                return false;
            }

            if(dataObj['name'] === ''){
                return false;
            }

            if(dataObj['email'] === ''){
                return false;
            }

            if(dataObj['message'] === ''){
                return false;
            }
        }
    </script>
@stop