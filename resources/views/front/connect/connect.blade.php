@extends('front.layout')
@include('front.header')
@section('content')
    <section class="content">
        <div class="wrap-1200">
        @yield('header')
        </div>
        <div class="wrap-1200">
            <div class="how-to-connect">
                <h1 class="page-title">{{$static_connect->title_field}}</h1>
                <p class="sub-title"> {{ $static_connect->connect_text_field }}</p>
                {{--@foreach($static_connect->steps_group as $item)--}}
                {{--<li class="step-item">--}}
                {{--<p>{{$item->step_title_field}}</p>--}}
                {{--<p>{!! $item->step_text_field !!}</p>--}}
                {{--</li>--}}
                {{--@endforeach--}}
                <ul class="step-block">
                    <li class="step-item">
                        <div class="image-wrap">
                            @svg('step_1')
                        </div>
                        <div class="step-info-block">
                            <span class="number-of-step">1</span>
                            <p class="step-title">Отправьте заявку</p>
                            <div class="step-text">
                                <p>Укажите желаемый тариф и отправьте заявку. Менеджер свяжется с вами в течение 10
                                    минут.</p>
                            </div>
                        </div>
                    </li>
                    <li class="step-item ">
                        <div class="image-wrap">
                            @svg('step_2')
                        </div>
                        <div class="step-info-block">
                            <span class="number-of-step">2</span>
                            <p class="step-title">Отправьте копии документов</p>
                            <div class="step-text">
                                <p>Чтобы ускорить подключение, вышлите копию и свидетельство о регистрации и реквизиты
                                    компании. Мы вышлем подготовленный договор.</p>
                            </div>
                        </div>
                    </li>
                    <li class="step-item ">
                        <div class="image-wrap">
                            @svg('step_3')
                        </div>
                        <div class="step-info-block">
                            <span class="number-of-step">3</span>
                            <p class="step-title">Заключите договор</p>
                            <div class="step-text">
                                <p>Бесплатное подключение производится после заключения соглашения и оплаты выбранного
                                    тарифа.</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="free-3-days">
                    <h2 class="title">Подключение — бесплатно в течении 3 рабочих дней</h2>
                    <div class="row-to-connector">
                        <button class="connect-item">Подключить интернет</button>
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
                               placeholder="Имя, должность">
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
                        <div class="cc">
                            <div class="cable"></div>
                            <div class="connector"></div>
                        </div>
                        <button class="send-form send-ask"  data-type-name="application" data-popup-id="application">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
