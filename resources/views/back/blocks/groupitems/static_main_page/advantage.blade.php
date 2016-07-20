<li class="group" data-group-id="{{$item_advantage->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Преимущества
        </label>
        <button type="button" class="any_delete" data-block="static_main_page" data-group="advantage"
                data-entity="groupitem" data-item-id="{{$item_advantage->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Описание
            </label>
            <input type="text" data-field-type="string" data-field-name="adv_text" data-block="static_main_page"
                   data-group="advantage" class="input group_field" value="{{$item_advantage->adv_text_field}}"
                   data-item-id="{{$item_advantage->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="static_main_page" data-group="advantage"
                    data-entity="groupitem" data-item-id="{{$item_advantage->id_field}}" data-descr="Эл. первой группы">
                Сохранить
            </button>
        </div>
    </div>
</li>