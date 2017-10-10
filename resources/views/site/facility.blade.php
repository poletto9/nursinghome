@extends('layouts/template')

@section('main')

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="fancy">
                        {{--<span>Facility</span>--}}
                        <span>{{ trans('facility_page.fac_head') }}</span>
                    </p>
                </div>
            </div>
            <!-- TEAM ROW 1 START -->
            <div class="row room_fac_type">
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/facility_cover/pool.jpg');">
                    <div class="info">
                        <p>{{ trans('facility_page.fac_pool') }}</p>
                        <h5><a href="javascript:void(0)"><button id="myBtnfac" class="button button1">{{ trans('facility_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/facility_cover/therapy.jpg');">
                    <div class="info">
                        <p>{{ trans('facility_page.fac_therapy') }}</p>
                        <h5><a href="javascript:void(0)"><button id="myBtnfac2" class="button button1">{{ trans('facility_page.detail_btn') }}</button></a></h5></div>
                </div>
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/facility_cover/massage.jpg');">
                    <div class="info">
                        <p>{{ trans('facility_page.fac_massage') }}</p>
                        <h5><a href="javascript:void(0)"><button id="myBtnfac3" class="button button1">{{ trans('facility_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
            </div>
            <!-- TEAM ROW 1 END -->
            <!-- TEAM ROW 2 START -->
            <div class="row room_fac_type">
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/facility_cover/exercise.jpg');">
                    <div class="info">
                        <p>{{ trans('facility_page.fac_ex') }}</p>
                        <h5><a href="javascript:void(0)"><button id="myBtnfac4" class="button button1">{{ trans('facility_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/facility_cover/activity_room.jpg');">
                    <div class="info">
                        <p>{{ trans('facility_page.activity_room') }}</p>
                        <h5><a href="javascript:void(0)"><button id="myBtnfac5" class="button button1">{{ trans('facility_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/facility_cover/cafe.jpg');">
                    <div class="info">
                        <p>{{ trans('facility_page.fac_cafe') }}</p>
                        <h5><a href="javascript:void(0)"><button id="myBtnfac6" class="button button1">{{ trans('facility_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
            </div>
            <!-- TEAM ROW 2 END -->
            <!-- TEAM ROW 3 START -->
<!--            <div class="row">-->
<!--                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/team-1.jpg');">-->
<!--                    <div class="info">-->
<!--                        <p>This is a popup of room details. when you click anyone links. The details of room service are got up.</p>-->
<!--                        <h5><a href="javascript:void(0)"><button id="myBtn7" class="button button1">More Details</button></a></h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/team-4.jpg');">-->
<!--                    <div class="info">-->
<!--                        <p>This is a popup of room details. when you click anyone links. The details of room service are got up.</p>-->
<!--                        <h5><a href="javascript:void(0)"><button id="myBtn8" class="button button1">More Details</button></a></h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/team-2.jpg');">-->
<!--                    <div class="info">-->
<!--                        <p>This is a popup of room details. when you click anyone links. The details of room service are got up.</p>-->
<!--                        <h5><a href="javascript:void(0)"><button id="myBtn9" class="button button1">More Details</button></a></h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- TEAM ROW 3 END -->
        </div>
        <!-- START The Modal -->
        <div id="myModalfac" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="image-gallery">
                    <div class="big-image">
                        {{--<img id="fac1_1" src="images/img_example.jpg" />--}}
                        {{--<img id="fac1_2" src="images/img_norway.jpg" />--}}
                        {{--<img id="fac1_3" src="images/img_example.jpg" />--}}
                        {{--<img id="fac1_4" src="images/img_norway.jpg" />--}}
                        <img id="default" src="images/pool/pool.jpg" />
                    </div>
                    <div>
                        {{--<a href="#fac1_1"><img  class="img-thumbnail imageResize" src="images/img_example.jpg" /></a>--}}
                        {{--<a href="#fac1_2"><img  class="img-thumbnail imageResize" src="images/img_norway.jpg" /></a>--}}
                        {{--<a href="#fac1_3"><img  class="img-thumbnail imageResize" src="images/img_example.jpg" /></a>--}}
                        {{--<a href="#fac1_4"><img  class="img-thumbnail imageResize" src="images/img_norway.jpg" /></a>--}}
                    </div>
                    <div class="by">
                    </div>
                    <div class="popup-img-content">
                        <h2>{{ trans('facility_page.fac_pool') }}</h2>
                        <p class="tab article_content">
                            {{ trans('facility_page.fac_pool_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END The Modal -->

        <!-- START The Modal2 -->
        <div id="myModalfac2" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="image-gallery">
                    <div class="big-image">
                        {{--<img id="fac2_1" src="images/img_example.jpg" />--}}
                        {{--<img id="fac2_2" src="images/img_example.jpg" />--}}
                        {{--<img id="fac2_3" src="images/img_example.jpg" />--}}
                        {{--<img id="fac2_4" src="images/img_example.jpg" />--}}
                        <img id="default2" src="images/therapy/physical-therapy.jpg" />
                    </div>
                    <div>
                        {{--<a href="#fac2_1"><img  class="img-thumbnail imageResize" src="images/img_example.jpg" /></a>--}}
                        {{--<a href="#fac2_2"><img  class="img-thumbnail imageResize" src="images/img_example.jpg" /></a>--}}
                        {{--<a href="#fac2_3"><img  class="img-thumbnail imageResize" src="images/img_example.jpg" /></a>--}}
                        {{--<a href="#fac2_4"><img  class="img-thumbnail imageResize" src="images/img_example.jpg" /></a>--}}
                    </div>
                    <div class="by">
                    </div>
                    <div class="popup-img-content">
                        <h2>{{ trans('facility_page.fac_therapy') }}</h2>
                        <p class="tab article_content">
                            {{ trans('facility_page.fac_therapy_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END The Modal2 -->

        <!-- START The Modal3 -->
        <div id="myModalfac3" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="image-gallery">
                    <div class="big-image">
                        {{--<img id="fac3_1" src="images/img_norway.jpg" />--}}
                        {{--<img id="fac3_2" src="images/img_norway.jpg" />--}}
                        {{--<img id="fac3_3" src="images/img_norway.jpg" />--}}
                        {{--<img id="fac3_4" src="images/img_norway.jpg" />--}}
                        <img id="default3" src="images/massage/massage_new.jpg" />
                    </div>
                    <div>
                        {{--<a href="#fac3_1"><img  class="img-thumbnail imageResize" src="images/img_norway.jpg" /></a>--}}
                        {{--<a href="#fac3_2"><img  class="img-thumbnail imageResize" src="images/img_norway.jpg" /></a>--}}
                        {{--<a href="#fac3_3"><img  class="img-thumbnail imageResize" src="images/img_norway.jpg" /></a>--}}
                        {{--<a href="#fac3_4"><img  class="img-thumbnail imageResize" src="images/img_norway.jpg" /></a>--}}
                    </div>
                    <div class="by">
                    </div>
                    <div class="popup-img-content">
                        <h2>{{ trans('facility_page.fac_massage') }}</h2>
                        <p class="tab article_content">
                            {{ trans('facility_page.fac_massage_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END The Modal3 -->

        <!-- START The Modal4 -->
        <div id="myModalfac4" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="image-gallery">
                    <div class="big-image">
                        {{--<img id="fac4_1" src="images/clients.jpg" />--}}
                        {{--<img id="fac4_2" src="images/clients.jpg" />--}}
                        {{--<img id="fac4_3" src="images/clients.jpg" />--}}
                        {{--<img id="fac4_4" src="images/clients.jpg" />--}}
                        <img id="default4" src="images/exercise/exercise_new.jpg" />
                    </div>
                    <div>
                        {{--<a href="#fac4_1"><img  class="img-thumbnail imageResize" src="images/clients.jpg" /></a>--}}
                        {{--<a href="#fac4_2"><img  class="img-thumbnail imageResize" src="images/clients.jpg" /></a>--}}
                        {{--<a href="#fac4_3"><img  class="img-thumbnail imageResize" src="images/clients.jpg" /></a>--}}
                        {{--<a href="#fac4_4"><img  class="img-thumbnail imageResize" src="images/clients.jpg" /></a>--}}
                    </div>
                    <div class="by">
                    </div>
                    <div class="popup-img-content">
                        <h2>{{ trans('facility_page.fac_ex') }}</h2>
                        <p class="tab article_content">
                            {{ trans('facility_page.fac_ex_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END The Modal4 -->

        <!-- START The Modal5 -->
        <div id="myModalfac5" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="image-gallery">
                    <div class="big-image">
                        {{--<img id="fac5_1" src="images/services.jpg" />--}}
                        {{--<img id="fac5_2" src="images/services.jpg" />--}}
                        {{--<img id="fac5_3" src="images/services.jpg" />--}}
                        {{--<img id="fac5_4" src="images/services.jpg" />--}}
                        <img id="default5" src="images/activity/activity_room.jpg" />
                    </div>
                    <div>
                        {{--<a href="#fac5_1"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                        {{--<a href="#fac5_2"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                        {{--<a href="#fac5_3"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                        {{--<a href="#fac5_4"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                    </div>
                    <div class="by">
                    </div>
                    <div class="popup-img-content">
                        <h2>{{ trans('facility_page.activity_room') }}</h2>
                        <p class="tab article_content">
                            {{ trans('facility_page.activity_room_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END The Modal5 -->
        <!-- START The Modal6 -->
        <div id="myModalfac6" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="image-gallery">
                    <div class="big-image">
                        {{--<img id="fac5_1" src="images/services.jpg" />--}}
                        {{--<img id="fac5_2" src="images/services.jpg" />--}}
                        {{--<img id="fac5_3" src="images/services.jpg" />--}}
                        {{--<img id="fac5_4" src="images/services.jpg" />--}}
                        <img id="default5" src="images/cafe/cafe_new.jpg" />
                    </div>
                    <div>
                        {{--<a href="#fac5_1"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                        {{--<a href="#fac5_2"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                        {{--<a href="#fac5_3"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                        {{--<a href="#fac5_4"><img  class="img-thumbnail imageResize" src="images/services.jpg" /></a>--}}
                    </div>
                    <div class="by">
                    </div>
                    <div class="popup-img-content">
                        <h2>{{ trans('facility_page.fac_cafe') }}</h2>
                        <p class="tab article_content">
                            {{ trans('facility_page.fac_cafe_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END The Modal6 -->
    </section>

@stop