<li class="group" data-group-id="{{$item_steps->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Как подключиться
        </label>
        <button type="button" class="any_delete" data-block="static_connect" data-group="steps" data-entity="groupitem"
                data-item-id="{{$item_steps->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Название шага
            </label>
            <input type="text" data-field-type="string" data-field-name="step_title" data-block="static_connect"
                   data-group="steps" class="input group_field" value="{{$item_steps->step_title_field}}"
                   data-item-id="{{$item_steps->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Описание шага
            </label>
            <textarea data-field-type="text" data-field-name="step_text" data-block="static_connect" data-group="steps"
                      class="input group_field" data-item-id="{{$item_steps->id_field}}"
                      placeholder="Текст">{{$item_steps->step_text_field}}</textarea>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="static_connect" data-group="steps"
                    data-entity="groupitem" data-item-id="{{$item_steps->id_field}}" data-descr="Эл. первой группы">
                Сохранить
            </button>
        </div>
    </div>
</li>