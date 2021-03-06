@extends('front.layout')
@include('front.header')
@section('content')
    <?php $title = $static_connect->page_title_field ?>
    <section class="content">
        <div class="wrap-1200">
        @yield('header')
        </div>
        <div class="wrap-1200">
            <div class="how-to-connect">
                <h1 class="page-title">{{$static_connect->title_field}}</h1>
                <p class="sub-title"> {{ $static_connect->connect_text_field }}</p>

                <ul class="step-block">
                    <?php $i = 0; ?>
                    @foreach($static_connect->steps_group as $item)
                        <?php $i++;?>
                        <li class="step-item">
                            <div class="image-wrap">
                                @if($i == 1)
                                    @svg('step_1')
                                    {{--<img src="/img/1_1.png" alt="">--}}
                                @elseif( $i == 2)
                                    @svg('step_2')
                                    {{--<img src="/img/2_2.png" alt="">--}}
                                @else
                                    @svg('step_3')
                                    {{--<img src="/img/3_3.png" alt="">--}}
                                @endif

                            </div>
                            <div class="step-info-block">
                                <span class="number-of-step">{{$i}}</span>
                                <p class="step-title">{{$item->step_title_field}}</p>
                                <div class="step-text">
                                    {!! $item->step_text_field !!}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="free-3-days">
                    <h2 class="title">Подключение — бесплатно в течениe 3 рабочих дней</h2>
                    <div class="row-to-connector">
                        <button class="connect-item">Оформить заявку</button>
                        <div class="cc-right">
                            <div class="connector-right"></div>
                            <div class="cable-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="application-block">
          <div class="wrap-1200">

                <div class="application" id="application">
                    <h3 class="title">Заявка на тариф</h3>
                    <div class="row">
                        <label class="row-name">Фактический адрес компании</label>
                        <input type="text" data-field-type="string" data-field-name="address" class="popup-field popup_field"
                               placeholder="Улица, пересечение">
                        <span href="#map" class="map-button">Указать <br> на карте</span>
                    </div>
                    <div class="row">
                        <label class="row-name">Контактное лицо</label>
                        <input type="text" data-field-type="string" data-field-name="name" class="popup-field popup_field"
                               placeholder="Имя">
                    </div>
                    <div class="row">
                        <label class="row-name">Номер телефона</label>
                        <input type="text" data-field-type="string" data-field-name="phone" class="popup-field popup_field"
                               placeholder="+7">
                    </div>
                    <div class="row">
                        <label class="row-name">Желаемая скорость, Мб/сек</label>
                        <input type="text" data-field-type="string" data-field-name="speed" class="popup-field popup_field"
                               placeholder="до 100 Мб/сек">
                    </div>
                    <div class="row button">

                        <button class="send-form send-ask"  data-type-name="application" data-popup-id="application">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
