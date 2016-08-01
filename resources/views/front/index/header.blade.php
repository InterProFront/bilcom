@section('header')
    <header class="page-head index-page">
        <div class="info-row">
            <div class="logo">
                <a href="/">
                    <img src="/images/{{$static_all_site->logo_image->primary_link}}"
                         alt="{{$static_all_site->logo_image->alt}} ">
                </a>
            </div>
            <div class="inf-block">
                <div class="phone">
                    <p class="phone">{{$static_all_site->phone_field}}</p>
                </div>
                <div class="consult">
                    <label>
                        <span class="icon"></span>
                        <a href="" class="link">Онлайн консультант</a>
                    </label>
                </div>
            </div>
            <div class="connect-item">
                <div class="connect">
                    <a href="#connect" class="link">Подключить интернет</a>
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <ul class="menu">
                <li class="menu-item active"><a href="/tarifs" class="menu-link">Тарифы</a></li>
                <li class="menu-item"><a href="/connect" class="menu-link">Как подключиться</a></li>
                <li class="menu-item"><a href="/about" class="menu-link">О Компании</a></li>
            </ul>

            <div class="mobile-menu">
                <div class="menu-button">☰</div>
                <ul class="popup-menu">
                    <li class="popup-menu-item"><a href="/tarifs" class="menu-link">Тарифы</a></li>
                    <li class="popup-menu-item"><a href="/connect" class="menu-link">Как подключиться</a></li>
                    <li class="popup-menu-item"><a href="/about" class="menu-link">О Компании</a></li>
                    <li class="popup-menu-item"><a href="" class="menu-link">Онлайн консультант</a></li>
                    <li class="popup-menu-item"><a href="" class="menu-link">Подключить интернет</a></li>
                </ul>
            </div>

        </nav>
    </header>
@endsection