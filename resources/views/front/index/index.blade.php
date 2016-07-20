@extends('front.layout')
@include('front.header')
@section('content')
    <section class="content">
        <div class="unlimite-int">
            <div class="wrap-1200">
                @yield('header')
                <h1 class="title">Безлимитный интернет в офис в Алматы</h1>
                <p class="sub-title">Реальная скорость от 5 до 100 Мб/сек и безусловно лучшим ценам в Алматы для
                    юредических лиц</p>
                <div class="plus-list">
                    <ul class="list">
                        <li class="plus-item modem">
                            <div class="wrap">
                                <img src="/img/modem.png" alt="">
                            </div>
                            <p class="plus-text">Без покупки <br>оборудования</p>
                        </li>
                        <li class="plus-item wifi">
                            <div class="wrap">
                                @svg('wifi')
                                <img src="/img/wifi.png" alt="">
                            </div>
                            <p class="plus-text">Надежный <br> и стабильный сигнал</p>
                        </li>
                        <li class="plus-item media">
                            <div class="wrap">
                                <img src="/img/media.png" alt="">
                            </div>
                            <p class="plus-text">Тарифы для любых задач</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tarifs">
            <div class="wrap-1200">
                <h2 class="title-gray">Безлимитные тарифы</h2>
                <p class="sub-title-gray">-10% при подключении до 25 июля</p>
                <div class="grid">
                    <div class="col-1-2">
                        <div class="col-title">Для малого бизнеса</div>
                        <div class="block-2">
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block" data-speed="500" data-live="150">
                                    <p class="tarif-name">5
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect">Подключить</button>
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block" data-speed="500" data-live="100">
                                    <p class="tarif-name">10
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect">Подключить</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="big-block">
                            <div class="emitter"></div>
                            <div class="hover-block bigest" data-speed="500" data-live="50" data-time="600">
                                <p class="tarif-name">25
                                    <span class="text">Мб/сек</span>
                                </p>
                                <p class="button-row">
                                    <button class="connect">Подключить</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="col-title">Для крупных компаний</div>
                        <div class="block-2">
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block" data-speed="1000" data-live="40" data-time="450">
                                    <p class="tarif-name">50
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect">Подключить</button>
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="emitter"></div>
                                <div class="hover-block" data-speed="1500" data-live="25" data-time="400">
                                    <p class="tarif-name">75
                                        <span class="text">Мб/сек</span>
                                    </p>
                                    <p class="button-row">
                                        <button class="connect">Подключить</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="big-block">
                            <div class="emitter"></div>
                            <div class="hover-block bigest" data-speed="1000" data-live="30" data-time="500">
                                <p class="tarif-name">100
                                    <span class="text">Мб/сек</span>
                                </p>
                                <p class="button-row">
                                    <button class="connect">Подключить</button>
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
                        <p class="sub-title">При любом объеме исходящего и входящего трафика,скорость тарифа остается
                            прежней.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="individual-tarif">
            <div class="wrap-1200">
                <h2 class="title">Индивидуальный тариф</h2>
                <p class="sub-title">Если вам нужны индивидуальные условия, заполните заявку и наш менеджер свяжется с
                    вами для обсуждения деталей</p>
                <ul class="icons-list">
                    <li class="icon play-ic"><img src="/img/icon-1.PNG" alt=""></li>
                    <li class="icon docs-ic"><img src="/img/icon-2.PNG" alt=""></li>
                    <li class="icon media-ic"><img src="/img/icon-3.PNG" alt=""></li>
                    <li class="icon pc-ic"><img src="/img/icon-4.PNG" alt=""></li>
                </ul>
                <div class="application">
                    <h3 class="title">Заявка на тариф</h3>
                    <div class="row">
                        <label class="row-name">Фактический адрес компании</label>
                        <input type="text" data-field-type="string" data-field-name="address" class="popup-field"
                               placeholder="Улица, пересечение">
                        <span class="map-button">Указать <br> на карте</span>
                    </div>
                    <div class="row">
                        <label class="row-name">Контактное лицо</label>
                        <input type="text" data-field-type="string" data-field-name="address" class="popup-field"
                               placeholder="Имя, должность">
                    </div>
                    <div class="row">
                        <label class="row-name">Номер телефона</label>
                        <input type="text" data-field-type="string" data-field-name="address" class="popup-field"
                               placeholder="+7">
                    </div>
                    <div class="row">
                        <label class="row-name">Желаемая скорость, Мб/сек</label>
                        <input type="text" data-field-type="string" data-field-name="address" class="popup-field"
                               placeholder="до 100 Мб/сек">
                    </div>
                    <div class="row button">
                        <div class="cc">
                            <div class="cable"></div>
                            <div class="connector"></div>
                        </div>
                        <button class="send-form">Отправить</button>
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
                            <li class="comment-item">
                                <div class="about-commentator">
                                    <div class="image">
                                        <img src="/img/comm2.PNG" alt="" class="avatar">
                                    </div>
                                    <div class="commentator">
                                        <p class="name">Гаушов Рональдбек</p>
                                        <p class="prof">Предприниматель</p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <p>Мы использовали для работы популярный 4G-интернет: сигнал пропадал,
                                        скорость была низкой, модем перегревался и садился.</p>
                                    <p>Интернет от «Билком» дешевле, быстрее и стабильнее: мы просто пользуемся и не
                                        вспоминаем, что бывали какие-то сложности.</p>
                                </div>
                                <span class="comment-speed">15 <i class="small">МБит</i></span>
                            </li>
                            <li class="comment-item">
                                <div class="about-commentator">
                                    <div class="image">
                                        <img src="/img/comm3.PNG" alt="" class="avatar">
                                    </div>
                                    <div class="commentator">
                                        <p class="name">Агент Смит</p>
                                        <p class="prof">Торговый агент очками виртуальной реальности</p>
                                    </div>
                                </div>
                                <div class="comment-section">
                                    <div class="comment">
                                        <p>Нео был очень хорош: он был на шаг впереди, когда нам удавалось
                                            приблизиться.</p>
                                        <p>Мы стреляли — и наши пули летели медленно. Как оказалось, у него стоял
                                            «Билком». Теперь мы тоже поставили 25 мегабит и он перестал быть таким
                                            шустрым.</p>
                                    </div>

                                    <span class="comment-speed">25 <i class="small">МБит</i></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-1-2--last">
                        <ul class="comment-list">
                            <li class="comment-item">
                                <div class="about-commentator">
                                    <div class="image">
                                        <img src="/img/comm1.PNG" alt="" class="avatar">
                                    </div>
                                    <div class="commentator">
                                        <p class="name">Дарт Вейдер</p>
                                        <p class="prof">Верховный главнокомандующий Империи</p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <p>Когда повстанцы разрушили Звезду Смерти, Империя осознала важность быстрого
                                        интернета.</p>
                                    <p>Во время атаки канал зависал, сообщения не уходили, штурмовики не получали
                                        приказы вовремя. С интернетом «Билком» мы уверны в победе.</p>
                                </div>
                                <span class="comment-speed">75 <i class="small">МБит</i></span>
                            </li>
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
