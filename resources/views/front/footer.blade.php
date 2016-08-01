@section('footer')
    <footer class="footer">
        <div class="wrap-1200 foot-flex">
            <div class="row-1-2">
                <div class="col-1-3">
                    <p class="row-text">{!! $static_all_site->copyright_field !!}</p>
                </div>
                <div class="col-1-3">
                    <p class="row-text">{!! $static_all_site->adress_field !!} <a
                                href="{{$static_all_site->map_link_field}}">Карта проезда</a></p>
                </div>
                <div class="col-1-3">
                    <p class="row-text">{{$static_all_site->phone_field}}</p>
                </div>
            </div>
            <div class="row-1-2">
                <div class="col-1-2 mail-icon">
                    <p class="row-text">
                        <a href="mailto:{{$static_all_site->mail_field}}">{{$static_all_site->mail_field}}</a>
                    </p>
                </div>
                <div class="col-1-2">
                    <p class="row-text">
                        Сделано в <a href="http://interpro.kz">ИнтерПро</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
