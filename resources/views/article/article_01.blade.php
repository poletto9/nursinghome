@extends('layouts/template')

@section('main')
        <!-- Start News & Promotion-->
<div class="body_news">
    <div class="article_news_content">
        <div class="row">

            <div class="new_panel_right">
                <div class="row news_right_content">
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
                            </p>
                            <p class="tab">
                                {{ trans('index_page.article_3') }}
                            </p>
                            <p class="tab">
                                <b>{{ trans('index_page.article_4') }}</b>
                            </p>
                            <p class="tab">
                                {{ trans('index_page.article_5') }}
                            </p>
                            <p class="tab">
                                <b>{{ trans('index_page.article_6') }}</b>
                            </p>
                            <p class="tab">
                                {{ trans('index_page.article_7') }}
                            </p>
                            <p class="tab">
                                <b>{{ trans('index_page.article_8') }}</b>
                            </p>
                            <p class="tab">
                                {{ trans('index_page.article_9') }}
                            </p>
                            <p class="tab">
                                <b>{{ trans('index_page.article_10') }}</b>
                            </p>
                            <p class="tab">
                            {{ trans('index_page.article_11') }}
                            <table>
                                <tbody style="background-color: bisque">
                                    <tr class="entry-content-br3">
                                        <th class="padding-10" width="30%">{{ trans('index_page.article_12') }}</th>
                                        <th class="padding-10" width="70%">{{ trans('index_page.article_13') }}</th>
                                    </tr>
                                    <tr class="entry-content-br1">
                                        <td class="padding-10">{{ trans('index_page.article_14') }}</td>
                                        <td class="padding-10">{{ trans('index_page.article_15') }}</td>
                                    </tr>
                                    <tr class="entry-content-br1">
                                        <td class="padding-10">{{ trans('index_page.article_16') }}</td>
                                        <td class="padding-10">{{ trans('index_page.article_17') }}</td>
                                    </tr>
                                    <tr class="entry-content-br1">
                                        <td class="padding-10">{{ trans('index_page.article_18') }}</td>
                                        <td class="padding-10">{{ trans('index_page.article_19') }}</td>
                                    </tr>
                                    <tr class="entry-content-br1">
                                        <td class="padding-10">{{ trans('index_page.article_20') }}</td>
                                        <td class="padding-10">{{ trans('index_page.article_21') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p class="tab">
                                <b>{{ trans('index_page.article_22') }}</b>
                            </p>
                            <p>
                                {{ trans('index_page.article_23') }}
                            </p>
                            <p>
                                <b>{{ trans('index_page.article_24') }} </b><a class="article_link" href="http://indrehab.com/how-to-choose-a-nursing-home-for-your-elderly-parent/" target="_blank">http://indrehab.com/how-to-choose-a-nursing-home-for-your-elderly-parent/</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End News & Promotion-->
@stop