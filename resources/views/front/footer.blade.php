@section('footer')
    <footer class="footer">
        <div class="wrap-1200 foot-flex">
            <div class="col-1-4">
                <p class="row-text">{{$static_all_site->copyright_field}}</p>
            </div>
            <div class="col-1-4">
                <p class="row-text">{!! $static_all_site->adress_field !!} <a href="{{$static_all_site->map_link_field}}">Карта проезда</a></p>
            </div>
            <div class="col-1-4">
                <p class="row-text">{{$static_all_site->phone_field}} <br> <a href="mailto:{{$static_all_site->mail_field}}">{{$static_all_site->mail_field}}</a></p>
            </div>
            <div class="col-1-4">
                <p class="row-text">Сделано в <a href="http://interpro.kz" target="_blank">ИнтерПро</a></p>
            </div>
        </div>
    </footer>
@endsection