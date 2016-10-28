@extends('layouts/template')

@section('main')

    <div id="wrapper">

        <!-- Demo Slideshow 1 -->
        {{--<ul class="rslides" id="slider1">--}}
            {{--<li><img src="{{ url('assets/images/slide/slide1-2.jpg') }}" alt=""></li>--}}
            {{--<li><img src="{{ url('assets/images/slide/slide2-2.jpg') }}" alt=""></li>--}}
            {{--<li><img src="{{ url('assets/images/slide/slide3-2.jpg') }}" alt=""></li>--}}
            {{--<li><img src="{{ url('assets/images/slide/slide4-2.jpg') }}" alt=""></li>--}}
            {{--<li><img src="{{ url('assets/images/slide/slide5-2.jpg') }}" alt=""></li>--}}
        {{--</ul>--}}

        <!-- Theme Slideshow 1 -->

        <div class="rslides_container">
            <ul class="rslides" id="slider1">
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide1-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide2-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide3-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide4-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide5-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide6-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide7-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide8-2.jpg') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ url('assets/images/slide/slide9-2.jpg') }}" alt=""></a></li>
            </ul>
        </div>

    </div>

{{--<!-- page wrapper start -->--}}
{{--<!-- ================ -->--}}
{{--<div class="page-wrapper">--}}

    {{--<!-- header start classes:--}}
        {{--fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">--}}
         {{--dark: dark header version e.g. <header class="header dark clearfix">--}}
    {{--================ -->--}}

    {{--<!-- header end -->--}}

    {{--<!-- banner start -->--}}
    {{--<!-- ================ -->--}}
    {{--<div class="banner">--}}

        {{--<!-- slideshow start -->--}}
        {{--<!-- ================ -->--}}
        {{--<div class="slideshow">--}}

            {{--<!-- slider revolution start -->--}}
            {{--<!-- ================ -->--}}
            {{--<div class="slider-banner-container">--}}
                {{--<div class="slider-banner">--}}
                    {{--<ul>--}}
                        {{--<li data-transition="slide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Theme">--}}
                            {{--<!-- slide 1 start -->--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-12px col-xs-12">--}}
                                    {{--<img src= {{ url('assets/images/slide/slide1-2.jpg') }} alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<!-- slide 1 end -->--}}

                        {{--<!-- slide 2 start -->--}}
                        {{--<li data-transition="slide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Theme">--}}
                            {{--<img src= {{ url('assets/images/slide/slide2-2.jpg') }}  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">--}}
                        {{--</li>--}}
                        {{--<!-- slide 2 end -->--}}

                        {{--<!-- slide 3 start -->--}}
                        {{--<li data-transition="slide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Theme">--}}
                            {{--<img src= {{ url('assets/images/slide/slide3-2.jpg') }}  alt="slidebg1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">--}}
                        {{--</li>--}}
                        {{--<!-- slide 3 end -->--}}

                        {{--<!-- slide 4 start -->--}}
                        {{--<li data-transition="slide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Theme">--}}
                            {{--<img src= {{ url('assets/images/slide/slide4-2.jpg') }}  alt="slidebg1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">--}}
                        {{--</li>--}}
                        {{--<!-- slide 4 end -->--}}

                        {{--<!-- slide 5 start -->--}}
                        {{--<li data-transition="slide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Theme">--}}
                            {{--<img src= {{ url('assets/images/slide/slide5-2.jpg') }}  alt="slidebg1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">--}}
                        {{--</li>--}}
                        {{--<!-- slide 5 end -->--}}


                    {{--</ul>--}}
                    {{--<div class="tp-bannertimer tp-bottom"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- slider revolution end -->--}}

        {{--</div>--}}
        {{--<!-- slideshow end -->--}}

    {{--</div>--}}
    {{--<!-- banner end -->--}}


{{--</div>--}}
{{--<!-- page-wrapper end -->--}}

    <!-- Start About US -->
    <div class="body_about_us">
        <div>
            <div class=" article_name_about_us">
               {{--About Us--}}
                {{ trans('index_page.about_head') }}
            </div>
            <div class="article_content tab">
                {{ trans('index_page.about_1') }}
            </div>
            <div class="article_content tab">
                {{ trans('index_page.about_2') }}
            </div>
        </div>
    </div>
    <!-- End About US -->

    <br>

    <!-- Start Service -->
    <div class="body_service">
        <div>
            <div class=" article_name_service">
                {{--Service--}}
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-3 padding-15">
                    <a href="javascript:void(0)" class="thumbnail">
                        <img src="{{ url('assets/images/service/show5.jpg') }}">
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 padding-15">
                    <a href="javascript:void(0)" class="thumbnail">
                        <img src="{{ url('assets/images/service/show6.jpg') }}">
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 padding-15">
                    <a href="javascript:void(0)" class="thumbnail">
                        <img src="{{ url('assets/images/service/show8.jpg') }}">
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 padding-15">
                    <a href="javascript:void(0)" class="thumbnail">
                        <img src="{{ url('assets/images/service/show10.jpg') }}">
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Service -->

    <br>

    <!-- Start News & Promotion-->
    <div class="body_news">
        <div class="article_news_content">
            <div class="row">

                <div class="new_panel_right">
                    <div class="row news_right_content">
                        <div class=" article_name_about_us" style="padding-left: 15px">
                            {{--About Us--}}
                            {{ trans('index_page.article_head') }}
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div>
                                <img src="{{ url('assets/images/caregiver.jpg') }}" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="article_content">
                                <p>
                                    <b>{{ trans('index_page.article_topic') }}</b>
                                </p>

                                <p class="tab">
                                    {{ trans('index_page.article_1') }}
                                </p>
                                <p class="tab">
                                    {{ trans('index_page.article_2') }}
                                    <a class="article_link" href="{{ url('article/01') }}" target="_blank">{{ trans('index_page.read_more') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Panel Left -->
                {{--<div class="col-lg-6 col-md-5 new_panel_left">--}}
                    {{--<div>--}}
                        {{--<img src="{{ url('assets/images/1024px.jpg') }}" class="img-thumbnail">--}}
                    {{--</div>--}}
                    {{--<div class="tab new_left_content">--}}
                        {{--<div>--}}
                            {{--<div class="article_content">--}}
                                {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.--}}
                                {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.--}}
                                {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- End Panel Left -->

                <!-- Start Panel Right -->
                {{--<div class="col-lg-6 col-md-7">--}}
                    {{--<div class="new_panel_right">--}}
                        {{--<div class="row news_right_content">--}}
                            {{--<div class="col-lg-4 col-md-4">--}}
                                {{--<div>--}}
                                    {{--<img src="{{ url('assets/images/1024px.jpg') }}" class="img-thumbnail">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-8 col-md-8">--}}
                                {{--<div>--}}
                                    {{--<div class="article_content">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<p class="news_grid"></p>--}}
                    {{--<div class="new_panel_right">--}}
                        {{--<div class="row news_right_content">--}}
                            {{--<div class="col-lg-4 col-md-4">--}}
                                {{--<div>--}}
                                    {{--<img src="{{ url('assets/images/1024px.jpg') }}" class="img-thumbnail">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-8 col-md-8">--}}
                                {{--<div>--}}
                                    {{--<div class="article_content">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<p class="news_grid"></p>--}}
                    {{--<div class="new_panel_right">--}}
                        {{--<div class="row news_right_content">--}}
                            {{--<div class="col-lg-4 col-md-4">--}}
                                {{--<div>--}}
                                    {{--<img src="{{ url('assets/images/1024px.jpg') }}" class="img-thumbnail">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-8 col-md-8">--}}
                                {{--<div>--}}
                                    {{--<div class="article_content">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<p class="news_grid"></p>--}}
                    {{--<div class="new_panel_right">--}}
                        {{--<div class="row news_right_content">--}}
                            {{--<div class="col-lg-4 col-md-4">--}}
                                {{--<div>--}}
                                    {{--<img src="{{ url('assets/images/1024px.jpg') }}" class="img-thumbnail">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-8 col-md-8">--}}
                                {{--<div>--}}
                                    {{--<div class="article_content">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- End Panel Right -->
            </div>
        </div>
    </div>
    <!-- End News & Promotion-->
@stop