@extends('layouts/template')

@section('main')

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div>
                        <p class="fancy">
                            {{--<span>Room Types</span>--}}
                            <span>{{ trans('room_page.room_head') }}</span>
                        </p>
                    </div>
                </div>
                <div class="article_room_content">
                    <p class="tab">
                        {{ trans('room_page.room_desc') }}
                    </p>
                </div>
            </div>
            <!-- TEAM ROW 1 START -->
            <div class="row room_fac_type">
                <!-- TEAM MEMBER START: copy paste the section below to add more team membes -->
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/room_cover/private_room_1.jpg');">
                    <div class="info">
                        <p>{{ trans('room_page.room_1') }}</p>
                        {{--<p>[ 35.5 sq.m. ]</p>--}}
                        <h5><a href="javascript:void(0)"><button id="myBtn" class="button button1">{{ trans('room_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/room_cover/private_room_2.jpg');">
                    <div class="info">
                        <p>{{ trans('room_page.room_2') }}</p>
                        {{--<p>[ 35.5 sq.m. ]</p>--}}
                        <h5><a href="javascript:void(0)"><button id="myBtn2" class="button button1">{{ trans('room_page.detail_btn') }}</button></a></h5></div>
                </div>
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/room_cover/two-bedded_room.jpg');">
                    <div class="info">
                        <p>{{ trans('room_page.room_3') }}</p>
                        {{--<p>[ 35.5 sq.m. ]</p>--}}
                        <h5><a href="javascript:void(0)"><button id="myBtn3" class="button button1">{{ trans('room_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
                <div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/room_cover/standard-ward.jpg');">
                    <div class="info">
                        <p>{{ trans('room_page.room_4') }}</p>
                        {{--<p>[ 35.5 sq.m. ]</p>--}}
                        <h5><a href="javascript:void(0)"><button id="myBtn4" class="button button1">{{ trans('room_page.detail_btn') }}</button></a></h5>
                    </div>
                </div>
            </div>
            <!-- TEAM ROW 1 END -->
            <!-- TEAM ROW 2 START -->
            <div class="row room_fac_type">
                {{--<div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/team-1.jpg');">--}}
                    {{--<div class="info">--}}
                        {{--<p>Standard Ward (5 beds)</p>--}}
                        {{--<p>[ 35.5 sq.m. ]</p>--}}
                        {{--<h5><a href="javascript:void(0)"><button id="myBtn4" class="button button1">More Details</button></a></h5>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/team-1.jpg');">--}}
                    {{--<div class="info">--}}
                        {{--<p>Two-Bedded Rooms</p>--}}
                        {{--<p>[ 35.5 sq.m. ]</p>--}}
                        {{--<h5><a href="javascript:void(0)"><button id="myBtn2" class="button button1">More Details</button></a></h5></div>--}}
                {{--</div>--}}
                {{--<div class="person col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0" style="background-image: url('images/team-1.jpg');">--}}
                    {{--<div class="info">--}}
                        {{--<p>Three-Bedded Room</p>--}}
                        {{--<p>[ 35.5 sq.m. ]</p>--}}
                        {{--<h5><a href="javascript:void(0)"><button id="myBtn3" class="button button1">More Details</button></a></h5>--}}
                    {{--</div>--}}
                {{--</div>--}}
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
        <div id="myModal" class="modal">
            <!-- Modal content -->

            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="image-gallery">
                    <div class="big-image">
                        <img id="room1_1" src="images/private_room_1/4.jpg" />
                        <img id="room1_2" src="images/private_room_1/5.jpg" />
                        <img id="room1_3" src="images/private_room_1/6.jpg" />
                        <img id="room1_4" src="images/private_room_1/8.jpg" />
                        <img id="default" src="images/private_room_1/1.jpg" />
                    </div>
                    <div>
                        <a href="#room1_1"><img class="img-thumbnail imageResize" src="images/private_room_1/4.jpg"/></a>
                        <a href="#room1_2"><img class="img-thumbnail imageResize" src="images/private_room_1/5.jpg" /></a>
                        <a href="#room1_3"><img class="img-thumbnail imageResize" src="images/private_room_1/6.jpg" /></a>
                        <a href="#room1_4"><img class="img-thumbnail imageResize" src="images/private_room_1/8.jpg" /></a>
                    </div>
                    <div class="by">
                    </div>
                    {{--<div class="popup-img-content">--}}
                        {{--<h2>Private Rooms</h2>--}}
                        {{--<p class="tab article_content">Our Premium Standard Room comes with king sized bed--}}
                            {{--(twin beds are available on request), direct dial phone, air conditioning--}}
                            {{--and a stylish table and chairs. This room is a business traveller favourite.--}}
                            {{--<br>- Coin-operated washing machines--}}
                            {{--<br>- Service washes (washing, ironing, folding, delivering)--}}
                            {{--<br>- Alterations and repairs--}}
                            {{--<br>- Professional dry cleaning--}}
                        {{--</p>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <!-- END The Modal -->
        <!-- START The Modal 2-->
        <div id="myModal2" class="modal">
            <!-- Modal content 1-->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="row-fluid">
                    <div class="image-gallery">
                        <div class="big-image">
                            <img id="room2_1" src="images/private_room_2/3.jpg" />
                            <img id="room2_2" src="images/private_room_2/4.jpg" />
                            <img id="room2_3" src="images/private_room_2/5.jpg" />
                            <img id="room2_4" src="images/private_room_2/6.jpg" />
                            <img id="default2" src="images/private_room_2/1.jpg" />
                        </div>
                        <div>
                            <a href="#room2_1"><img  class="img-thumbnail imageResize" src="images/private_room_2/3.jpg" /></a>
                            <a href="#room2_2"><img  class="img-thumbnail imageResize" src="images/private_room_2/4.jpg" /></a>
                            <a href="#room2_3"><img  class="img-thumbnail imageResize" src="images/private_room_2/5.jpg" /></a>
                            <a href="#room2_4"><img  class="img-thumbnail imageResize" src="images/private_room_2/6.jpg" /></a>
                        </div>
                        <div class="by">
                        </div>
                        {{--<div class="popup-img-content">--}}
                            {{--<h2>Two-Bedded Rooms</h2>--}}
                            {{--<p class="tab article_content">Our Premium Standard Room comes with king sized bed--}}
                                {{--(twin beds are available on request), direct dial phone, air conditioning--}}
                                {{--and a stylish table and chairs. This room is a business traveller favourite.--}}
                                {{--<br>- Coin-operated washing machines--}}
                                {{--<br>- Service washes (washing, ironing, folding, delivering)--}}
                                {{--<br>- Alterations and repairs--}}
                                {{--<br>- Professional dry cleaning--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- END The Modal 2-->
        <!-- START The Modal 3-->
        <div id="myModal3" class="modal">
            <!-- Modal content 1-->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="row-fluid">
                    <div class="image-gallery">
                        <div class="big-image">
                            <img id="room3_1" src="images/two_bedded_room/4.jpg" />
                            <img id="room3_2" src="images/two_bedded_room/6.jpg" />
                            <img id="room3_3" src="images/two_bedded_room/9.jpg" />
                            <img id="room3_4" src="images/two_bedded_room/11.jpg" />
                            <img id="default3" src="images/two_bedded_room/1.jpg" />
                        </div>
                        <div>
                            <a href="#room3_1"><img  class="img-thumbnail imageResize" src="images/two_bedded_room/4.jpg" /></a>
                            <a href="#room3_2"><img  class="img-thumbnail imageResize" src="images/two_bedded_room/6.jpg" /></a>
                            <a href="#room3_3"><img  class="img-thumbnail imageResize" src="images/two_bedded_room/9.jpg" /></a>
                            <a href="#room3_4"><img  class="img-thumbnail imageResize" src="images/two_bedded_room/11.jpg" /></a>
                        </div>
                        <div class="by">
                        </div>
                        {{--<div class="popup-img-content">--}}
                            {{--<h2>Three-Bedded Rooms</h2>--}}
                            {{--<p class="tab article_content">Our Premium Standard Room comes with king sized bed--}}
                                {{--(twin beds are available on request), direct dial phone, air conditioning--}}
                                {{--and a stylish table and chairs. This room is a business traveller favourite.--}}
                                {{--<br>- Coin-operated washing machines--}}
                                {{--<br>- Service washes (washing, ironing, folding, delivering)--}}
                                {{--<br>- Alterations and repairs--}}
                                {{--<br>- Professional dry cleaning--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    </div>

                </div>
            </div>
        </div>
        <!-- END The Modal 3-->

        <!-- START The Modal 4-->
        <div id="myModal4" class="modal">
            <!-- Modal content 1-->
            <div class="modal-content" style="background: #eada85; border-top: 30px solid #2c0000; border-bottom: 30px solid #2c0000">
                <span class="close">x</span>
                <div class="row-fluid">
                    <div class="image-gallery">
                        <div class="big-image">
                            <img id="room4_1" src="images/standard_ward/2.jpg" />
                            <img id="room4_2" src="images/standard_ward/3.jpg" />
                            <img id="room4_3" src="images/standard_ward/4.jpg" />
                            <img id="room4_4" src="images/standard_ward/5.jpg" />
                            <img id="default4" src="images/standard_ward/1.jpg" />
                        </div>
                        <div>
                            <a href="#room4_1"><img  class="img-thumbnail imageResize" src="images/standard_ward/2.jpg" /></a>
                            <a href="#room4_2"><img  class="img-thumbnail imageResize" src="images/standard_ward/3.jpg" /></a>
                            <a href="#room4_3"><img  class="img-thumbnail imageResize" src="images/standard_ward/4.jpg" /></a>
                            <a href="#room4_4"><img  class="img-thumbnail imageResize" src="images/standard_ward/5.jpg" /></a>
                        </div>
                        <div class="by">
                        </div>
                        {{--<div class="popup-img-content">--}}
                            {{--<h2>Standard Ward (5 beds)</h2>--}}
                            {{--<p class="tab article_content">Our Premium Standard Room comes with king sized bed--}}
                                {{--(twin beds are available on request), direct dial phone, air conditioning--}}
                                {{--and a stylish table and chairs. This room is a business traveller favourite.--}}
                                {{--<br>- Coin-operated washing machines--}}
                                {{--<br>- Service washes (washing, ironing, folding, delivering)--}}
                                {{--<br>- Alterations and repairs--}}
                                {{--<br>- Professional dry cleaning--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    </div>

                </div>
            </div>
        </div>
        <!-- END The Modal 3-->
    </section>

@stop