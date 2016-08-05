@extends('front.layout')
@include('front.header')
@section('content')
    <?php $title = $static_company->page_title_field ?>
    <section class="content">
        <div class="wrap-1200">
            @yield('header')
        </div>
        <div class="wrap-1200">
            <div class="about-company">
                <h1 class="title">{{$static_company->title_field}}</h1>
                <div class="column-wrap">
                    <div class="base-content-wrap">
                        <div class="img-wrap">
                            <img src="/images/{{$static_company->head_image->primary_link}}"
                                 alt="{{$static_company->head_image->alt}}">
                        </div>
                        <div class="text-block">
                            {!! $static_company->about_company_field !!}
                        </div>
                        <a href="/tarifs" class="big-link">Выбрать тариф</a>
                    </div>
                    <div class="right-block-wrap">
                        <div class="right-block">
                            <div class="image-right-wrap">
                                <img src="/img/small.PNG" alt="">
                            </div>
                            <div class="right-text-block">
                                {!! $static_company->right_text_field !!}
                            </div>

                        </div>
                        <div class="consult-block">
                            <div class="img-wrap">
                                <img src="/img/consult-girl.PNG" alt="Онлайн консультант">
                            </div>
                            <div class="text-block">
                                Чтобы обсудить детали, свяжитесь с Татьяной по телефону +7 707 123-45-67 или
                                <a class="link consult-button" href="#">напишите письмо</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
