@extends('front.layout')
@include('front.index.header')
@section('content')
    <?php $title = $static_main_page->page_title_field ?>
    <section class="content">
        <div class="unlimite-int">
            <div class="wrap-1200">
                @yield('header')
                <h1 class="title">Безлимитный интернет в офис в Алматы</h1>
                <p class="sub-title">{{$static_main_page->unlimit_text_field}}</p>
                <div class="plus-list">
                    <ul class="list">
                        <?php $i = 0;?>
                        @foreach($static_main_page->advantage_group as $item)
                            <?php $i++ ?>
                            @if($i == 1)
                                <li class="plus-item modem">
                                    <div class="wrap">
                                        <img src="/img/modem.png" alt="">
                                    </div>
                                    <p class="plus-text">{{$item->adv_text_field}}</p>
                                </li>
                            @elseif($i == 2)
                                <li class="plus-item wifi">
                                    <div class="wrap">
                                        @svg('wifi')
                                        <img src="/img/wifi.png" alt="">
                                    </div>
                                    <p class="plus-text">{{$item->adv_text_field}}</p>
                                </li>
                            @elseif($i == 3)
                                <li class="plus-item media">
                                    <div class="wrap">
                                        <img src="/img/media.png" alt="">
                                    </div>
                                    <p class="plus-text">{{$item->adv_text_field}}</p>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="tarifs">
            <div class="wrap-1200">
                <h2 class="title-gray">Безлимитные тарифы</h2>
                <p class="sub-title-gray">{{$static_main_page->sales_text_field}}</p>
                <div class="grid">
                    <div class="col-1-2">
                        <div class="col-title">Для малого бизнеса</div>
                        <div class="block-2">
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block t1" data-speed="500" data-live="150">
                                    <p class="tarif-name">5
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect" href="#connect_tarif" data-mb="5 Мб/сек">Подключить</button>
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block t2" data-speed="500" data-live="100">
                                    <p class="tarif-name">10
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect" href="#connect_tarif" data-mb="10 Мб/сек">Подключить</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="big-block">
                            <div class="emitter"></div>
                            <div class="hover-block bigest t1" data-speed="500" data-live="50" data-time="600">
                                <p class="tarif-name">25
                                    <span class="text">Мб/сек</span>
                                </p>
                                <p class="button-row">
                                    <button class="connect" href="#connect_tarif" data-mb="25 Мб/сек">Подключить</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="col-title">Для крупных компаний</div>
                        <div class="block-2">
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block t3" data-speed="1000" data-live="40" data-time="450">
                                    <p class="tarif-name">50
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect" href="#connect_tarif" data-mb="50 Мб/сек">Подключить</button>
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block t4" data-speed="1500" data-live="25" data-time="400">
                                    <p class="tarif-name" data-mb="75">75
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect" href="#connect_tarif" data-mb="75 Мб/сек">Подключить</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="big-block">
                            <div class="emitter"></div>
                            <div class="hover-block bigest t2" data-speed="1000" data-live="30" data-time="500">
                                <p class="tarif-name" data-mb="100">100
                                    <span class="text">Мб/сек</span>
                                </p>
                                <p class="button-row">
                                    <button class="connect" href="#connect_tarif" data-mb="100 Мб/сек">Подключить</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dont-speed-down">
            <div class="wrap-1200">
                <div class="speed-block">
                    <div class="col-1-2">
                        <img src="/img/no-speed-down.png" alt="">
                    </div>
                    <div class="col-1-2">
                        <h2 class="title">Скорость не падает</h2>
                        <p class="sub-title">{{$static_main_page->speed_text_field}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="individual-tarif">
            <div class="wrap-1200">
                <h2 class="title">Индивидуальный тариф</h2>
                <p class="sub-title">{{$static_main_page->individual_text_field}}</p>
                <ul class="icons-list">
                    <li class="icon play-ic"><img src="/img/mtab.gif" alt=""></li>
                    <li class="icon docs-ic"><img src="/img/mdoc.gif" alt=""></li>
                    <li class="icon media-ic"><img src="/img/mmelody.gif" alt=""></li>
                    <li class="icon pc-ic"><img src="/img/mnote.gif" alt=""></li>
                </ul>
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
        <div class="comments-block">
            <div class="wrap-1200">
                <h2 class="title">Отзывы клиентов</h2>
                <div class="grid-comment">
                    <div class="col-1-2--first">
                        <ul class="comment-list">
                            <?php $i = 0 ?>
                            @foreach($comment as $item)
                                <?php $i++ ?>
                                @if( $i <= 2)
                                    <li class="comment-item">
                                        <div class="about-commentator">
                                            <div class="image">
                                                <img src="/images/{{$item->avatar_image->primary_link}}"
                                                     alt="{{$item->avatar_image->alt}}" class="avatar">
                                            </div>
                                            <div class="commentator">
                                                <p class="name">{{$item->name_field}}</p>
                                                <p class="prof">{{$item->prof_field}}</p>
                                            </div>
                                        </div>
                                        <div class="comment">{!! $item->comment_text_field !!}</div>
                                        <span class="comment-speed">{{$item->speed_field}} <i
                                                    class="small">МБит</i></span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-1-2--last">
                        <ul class="comment-list">
                            <?php $i = 0 ?>
                            @foreach($comment as $item)
                                <?php $i++ ?>
                                @if( $i == 3)
                                    <li class="comment-item">
                                        <div class="about-commentator">
                                            <div class="image">
                                                <img src="/images/{{$item->avatar_image->primary_link}}"
                                                     alt="{{$item->avatar_image->alt}}" class="avatar">
                                            </div>
                                            <div class="commentator">
                                                <p class="name">{{$item->name_field}}</p>
                                                <p class="prof">{{$item->prof_field}}</p>
                                            </div>
                                        </div>
                                        <div class="comment">{!! $item->comment_text_field !!}</div>
                                        <span class="comment-speed">{{$item->speed_field}} <i
                                                    class="small">МБит</i></span>
                                    </li>
                                @endif
                            @endforeach
                            <li class="terabite">
                                <div class="img-wrap">
                                    <img src="/img/350.PNG" alt="" class="ter-350">
                                </div>
                                <div class="ter-text">
                                    <p class="title-text"><span class="big-text">350</span>
                                        террабайт
                                    </p>
                                    <p class="sub-text">скачали и отправили клиенты «Билкома» в августе</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
