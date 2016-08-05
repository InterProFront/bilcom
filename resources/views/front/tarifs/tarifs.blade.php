@extends('front.layout')
@include('front.header')
@section('content')
    <section class="content">
        <div class="wrap-1200">
            @yield('header')
        </div>

        <div class="wrap-1200">
            <div class="tarifs-block-wrap">
                <h1 class="title">{!!$static_tarifs->title_field!!}</h1>
                <div class="green-block animate">
                    <p class="sub-title">{{$static_tarifs->tarif_text_field}}</p>
                </div>
                <ul class="plus-block">
                    @foreach($static_tarifs->tarif_adv_group as $item)
                        <li class="plus-item">
                            <div class="img-wrap">
                                <img src="/images/{{$item->icon_image->primary_link}}" alt="{{$item->icon_image->alt}}">
                            </div>
                            <div class="text-wrap">
                                <p>{{$item->adv_text_field}}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="business-connect-item">
                    @foreach($static_tarifs->tarif_category_group as $item_category)
                        @include('front.tarifs.tarif_category')
                    @endforeach
                </div>
            </div>
            <div class="free-3-days">
                <h2 class="title">Подключение — бесплатно в течении 3 рабочих дней</h2>
                <div class="row-to-connector connect">
                    <button class="connect-item link" href="#connect">Оформить заявку</button>
                    <div class="cc-right">
                        <div class="connector-right"></div>
                        <div class="cable-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
