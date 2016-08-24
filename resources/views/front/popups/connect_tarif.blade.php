@section('connect_tarif')
    <div class="overlay">
        <div class="application white-popup" id="connect_tarif">
            <h3 class="title">Заявка на подключение</h3>
            <div class="row">
                <label class="row-name">Фактический адрес компании</label>
                <input type="text" data-field-type="string" data-field-name="address" class="popup-field popup_field"
                       placeholder="Улица, пересечение">
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
                       placeholder="до 100 Мб/сек" readonly >
            </div>
            <div class="row button">
                <button class="send-form send-ask"  data-type-name="application" data-popup-id="connect_tarif">Отправить</button>
            </div>
        </div>
    </div>
@endsection