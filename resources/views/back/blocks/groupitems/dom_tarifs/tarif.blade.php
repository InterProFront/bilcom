<li class="group" data-group-id="{{$item_tarif->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Тариф
        </label>
        <button type="button" class="any_delete" data-block="dom_tarifs" data-group="tarif" data-entity="groupitem"
                data-item-id="{{$item_tarif->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="tarif_name" data-block="dom_tarifs"
                   data-group="tarif" class="input group_field" value="{{$item_tarif->tarif_name_field}}"
                   data-item-id="{{$item_tarif->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="dom_tarifs" data-group="tarif" data-entity="groupitem"
                    data-item-id="{{$item_tarif->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>