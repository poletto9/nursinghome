@extends('layouts/template')

@section('main')
    {{--<!-- PAGE START -->--}}
    {{--<div id="page">--}}

        {{--<!-- HOME START -->--}}
        {{--<header id="header">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-7 col-md-10 col-xs-10 col-xs-offset-1 col-sm-9 article_content" id="intro" style="text-align: left">--}}
                        {{--<h1><strong>บริการ</strong></h1>--}}
                        {{--<br>--}}
                        {{--<!-- TICKER START -->--}}
                        {{--<div class="ticker">--}}
                            {{--<h3><strong>Clean</strong> design.</h3>--}}
                            {{--<h3><strong>Bright</strong> ideas.</h3>--}}
                            {{--<h3><strong>Amazing</strong> results.</h3>--}}
                        {{--</div>--}}
                        {{--<!-- TICKER END -->--}}
                        {{--<ul>--}}
                            {{--<li>- บริการอาหารเพื่อสุขภาพ ตามสภาวะทางร่างกายของผู้พักอาศัย</li>--}}
                            {{--<li>- การดูแลสุขภาพแบบศาสตร์องค์รวม</li>--}}
                            {{--<li>- ฝึกความยืดหยุ่นของกล้ามเนื้อ</li>--}}
                            {{--<li>- กิจกรรมนันทนาการ เช่น หมากรุก ฟังเพลง ปลูกผัก อ่านหนังสือและท่องเที่ยว</li>--}}
                            {{--<li>- บริการผู้ดูแลส่วนตัวตลอด 24 ชั่วโมง</li>--}}
                            {{--<li>- โปรแกรมล้างสารพิษ</li>--}}
                            {{--<li>- โปรแกรมดูแลโรคที่เกิดจากการทำงาน เช่น ออฟฟิสซินโดรม</li>--}}
                            {{--<li>- โปรแกรมดูแลข้อเข่าเสื่อมโดยไม่ต้องผ่าตัด</li>--}}
                            {{--<li>- โปรแกรมลดน้ำหนักด้วยวิธีปลอดภัย</li>--}}
                        {{--</ul>--}}
                        {{--<br>--}}
                        {{--<a href="#about" class="btn btn-transparent scroll"><strong>LEARN MORE</strong></a>--}}
                        {{--<a href="javascript:void(0)" class="btn btn-link btn-dark scroll">Go to A.E.C Clinic Website <i class="fa fa-angle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</header>--}}
        {{--<!-- HOME END -->--}}
    {{--</div>--}}
    {{--<!-- PAGE END -->--}}

<!-- PAGE START -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <p class="fancy">
                        <span>{{ trans('service_page.service_head') }}</span>
                    </p>
                </div>
            </div>
            <div class="article_room_content">
                <p class="tab">
                    {{ trans('service_page.service_desc') }}<span class="span_green"><b>{{trans('service_page.service_desc_1')}}</b></span>{{trans('service_page.service_desc_2')}}
                </p>
                <p class="tab">
                    {{ trans('service_page.service_desc_etc') }}
                </p>
                <p class="tab">
                    <span class="span_orange">{{ trans('service_page.service_1') }}</span>{{ trans('service_page.service_2') }}
                </p>
                <p class="tab">
                    {{ trans('service_page.service_3') }}<span class="span_orange">{{ trans('service_page.service_4') }}</span>{{ trans('service_page.service_5') }}
                </p>
                <p class="tab">
                    <span class="span_orange">{{ trans('service_page.service_6') }}</span>{{ trans('service_page.service_7') }}
                </p>
                <p class="tab">
                    <span class="span_orange">{{ trans('service_page.service_8') }}</span>{{ trans('service_page.service_9') }}
                    <span class="span_orange">{{ trans('service_page.service_10') }}</span>{{ trans('service_page.service_11') }}
                </p>
                <p class="tab">
                    <span class="span_orange">{{ trans('service_page.service_12') }}</span>{{ trans('service_page.service_13') }}
                    <a href="{{ url('care-giver') }}" target="_self"><span class="span_orange">{{ trans('service_page.service_14') }}</span></a>
                </p>
                <p class="tab" style="color: #006a6a;">
                    <b><u>{{ trans('service_page.service_15') }}</u></b>
                </p>
                <p class="tab">
                    <b><u>{{ trans('service_page.service_16') }}</u></b>{{ trans('service_page.service_17') }}
                </p>
                <p class="tab">
                   <b><u>{{ trans('service_page.service_18') }}</u></b>{{ trans('service_page.service_19') }}
                </p>
                <p class="tab">
                    <b><u>{{ trans('service_page.service_20') }}</u></b>{{ trans('service_page.service_21') }}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- PAGE END -->
@stop