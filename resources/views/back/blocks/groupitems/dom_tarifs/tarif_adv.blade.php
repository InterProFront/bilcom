<li class="group" data-group-id="{{$item_tarif_adv->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Преимущества Билком
        </label>
        <button type="button" class="any_delete" data-block="dom_tarifs" data-group="tarif_adv" data-entity="groupitem"
                data-item-id="{{$item_tarif_adv->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="icon" data-group="tarif_adv"
                               data-field-type="image" data-item-id="{{$item_tarif_adv->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_adv->icon_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="icon" data-group="tarif_adv"
                               data-field-type="image" data-item-id="{{$item_tarif_adv->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_adv->icon_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="icon" data-group="tarif_adv"
                               data-field-type="image" data-item-id="{{$item_tarif_adv->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_adv->icon_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="icon" data-group="tarif_adv"
                               data-field-type="image" data-item-id="{{$item_tarif_adv->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_adv->icon_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="icon" data-group="tarif_adv"
                               data-field-type="image" data-item-id="{{$item_tarif_adv->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_adv->icon_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="icon" data-group="tarif_adv"
                               data-field-type="image" data-item-id="{{$item_tarif_adv->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_adv->icon_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_tarif_adv->icon_image->preview_link}}" class="preview"
                             data-field-name="icon" data-block="dom_tarifs" data-group="tarif_adv"
                             data-item-id="{{$item_tarif_adv->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_tarif_adv->icon_image->alt}}" data-item-id="{{$item_tarif_adv->id_field}}"
                               data-field-name="icon" data-block="dom_tarifs">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field" data-field-name="icon"
                                   data-field-type="image" data-block="dom_tarifs" data-group="tarif_adv"
                                   data-item-id="{{$item_tarif_adv->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="adv_text" data-block="dom_tarifs"
                   data-group="tarif_adv" class="input group_field" value="{{$item_tarif_adv->adv_text_field}}"
                   data-item-id="{{$item_tarif_adv->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="dom_tarifs" data-group="tarif_adv"
                    data-entity="groupitem" data-item-id="{{$item_tarif_adv->id_field}}" data-descr="Эл. первой группы">
                Сохранить
            </button>
        </div>
    </div>
</li>