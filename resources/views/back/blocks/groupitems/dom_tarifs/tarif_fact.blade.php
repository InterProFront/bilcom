<li class="group" data-group-id="{{$item_tarif_fact->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Особенность тарифов
        </label>
        <button type="button" class="any_delete" data-block="dom_tarifs" data-group="tarif_fact" data-entity="groupitem"
                data-item-id="{{$item_tarif_fact->id_field}}" data-descr="Эл. первой группы"> Удалить
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
                        <input type="hidden" class="prefix" data-field-name="fact" data-group="tarif_fact"
                               data-field-type="image" data-item-id="{{$item_tarif_fact->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_fact->fact_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="fact" data-group="tarif_fact"
                               data-field-type="image" data-item-id="{{$item_tarif_fact->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_fact->fact_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="fact" data-group="tarif_fact"
                               data-field-type="image" data-item-id="{{$item_tarif_fact->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_fact->fact_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="fact" data-group="tarif_fact"
                               data-field-type="image" data-item-id="{{$item_tarif_fact->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_fact->fact_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="fact" data-group="tarif_fact"
                               data-field-type="image" data-item-id="{{$item_tarif_fact->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_fact->fact_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="fact" data-group="tarif_fact"
                               data-field-type="image" data-item-id="{{$item_tarif_fact->id_field}}"
                               data-block="dom_tarifs" value="{{$item_tarif_fact->fact_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_tarif_fact->fact_image->preview_link}}" class="preview"
                             data-field-name="fact" data-block="dom_tarifs" data-group="tarif_fact"
                             data-item-id="{{$item_tarif_fact->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_tarif_fact->fact_image->alt}}"
                               data-item-id="{{$item_tarif_fact->id_field}}" data-field-name="fact"
                               data-block="dom_tarifs">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field" data-field-name="fact"
                                   data-field-type="image" data-block="dom_tarifs" data-group="tarif_fact"
                                   data-item-id="{{$item_tarif_fact->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="fact_text" data-block="dom_tarifs" data-group="tarif_fact"
                      class="input group_field" data-item-id="{{$item_tarif_fact->id_field}}"
                      placeholder="Текст">{{$item_tarif_fact->fact_text_field}}</textarea>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="dom_tarifs" data-group="tarif_fact"
                    data-entity="groupitem" data-item-id="{{$item_tarif_fact->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>