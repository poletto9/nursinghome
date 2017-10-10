@extends('layouts/template')

@section('main')

    <div class="body_care">
        <div style="padding-top: 30px">
            <p class="fancy">
                {{--<span>Caregiver</span>--}}
                <span>{{ trans('care_page.care_head') }}</span>
            </p>
        </div>
        <div class="article_room_content">
            <p class="tab">
                {{ trans('care_page.care_desc') }}
            </p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4">
                <img src="{{ url('assets/images/baby_care.jpg') }}" class="img-thumbnail">
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="article_care_content">
                    <div class="care_type">
                        <p><b>{{ trans('care_page.care_1') }}</b></p>
                    </div>
                    <div>
                        <p class="tab">
                            {{ trans('care_page.care_1_desc') }}
                        </p>
                        <p>
                            {{ trans('care_page.care_1_paid') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <img src="{{ url('assets/images/child_care.jpg') }}" class="img-thumbnail">
            </div>
            <div class="col-lg-9 col-md-8" >
                <div class="article_care_content">
                    <div class="care_type">
                        <p><b>{{ trans('care_page.care_2') }}</b></p>
                    </div>
                    <div>
                        <p class="tab">
                            {{ trans('care_page.care_2_desc') }}
                        </p>
                        <p>
                            {{ trans('care_page.care_2_paid') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <img src="{{ url('assets/images/caregiver_02.jpg') }}" class="img-thumbnail">
            </div>
            <div class="col-lg-9 col-md-8" >
                <div class="article_care_content">
                    <div class="care_type">
                        <p><b>{{ trans('care_page.care_3') }}</b></p>
                    </div>
                    <div>
                        <p class="tab">
                            {{ trans('care_page.care_3_desc') }}
                        </p>
                        <p>
                            {{ trans('care_page.care_3_paid') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <img src="{{ url('assets/images/caregiver_01.jpg') }}" class="img-thumbnail">
            </div>
            <div class="col-lg-9 col-md-8" >
                <div class="article_care_content">
                    <div class="care_type">
                        <p><b>{{ trans('care_page.care_4') }}</b></p>
                    </div>
                    <div>
                        <p class="tab">
                            {{ trans('care_page.care_4_desc') }}
                        </p>
                        <p>
                            {{ trans('care_page.care_4_paid') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{--<br>--}}
        {{--<div style="text-align: center">--}}
            {{--<a href="http://www.homehelpersthailand.com/" target="-_blank" class="btn btn-link btn-default">Visit Caregiver Website <i class="fa fa-angle-right"></i></a>--}}
        {{--</div>--}}
    </div>

@stop