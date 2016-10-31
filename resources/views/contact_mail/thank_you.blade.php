@extends('layouts/template')

@section('main')

    <div class="thx_content">
        <div>
            {{ trans('index_page.thx_1') }}
        </div>
        <div>
            {{ trans('index_page.thx_2') }}<br>
            {{ trans('index_page.thx_3') }}
        </div>
        <div>
            <div style="text-align: center">
                <a href="{{ url('contact-us') }}" class="btn btn-link btn-default">{{ trans('index_page.btn_back') }} <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>

@stop