@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_comment->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="avatar" data-group="comment"
                                   data-field-type="image" data-item-id="{{$item_comment->id_field}}"
                                   data-block="dom_rollback" value="{{$item_comment->avatar_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="avatar" data-group="comment"
                                   data-field-type="image" data-item-id="{{$item_comment->id_field}}"
                                   data-block="dom_rollback" value="{{$item_comment->avatar_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="avatar" data-group="comment"
                                   data-field-type="image" data-item-id="{{$item_comment->id_field}}"
                                   data-block="dom_rollback" value="{{$item_comment->avatar_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="avatar" data-group="comment"
                                   data-field-type="image" data-item-id="{{$item_comment->id_field}}"
                                   data-block="dom_rollback" value="{{$item_comment->avatar_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="avatar" data-group="comment"
                                   data-field-type="image" data-item-id="{{$item_comment->id_field}}"
                                   data-block="dom_rollback" value="{{$item_comment->avatar_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="avatar" data-group="comment"
                                   data-field-type="image" data-item-id="{{$item_comment->id_field}}"
                                   data-block="dom_rollback" value="{{$item_comment->avatar_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_comment->avatar_image->preview_link}}" class="preview"
                                 data-field-name="avatar" data-block="dom_rollback" data-group="comment"
                                 data-item-id="{{$item_comment->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_comment->avatar_image->alt}}"
                                   data-item-id="{{$item_comment->id_field}}" data-field-name="avatar"
                                   data-block="dom_rollback">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="avatar" data-field-type="image" data-block="dom_rollback"
                                       data-group="comment" data-item-id="{{$item_comment->id_field}}"
                                       data-entity="groupitem">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="name" data-block="dom_rollback"
                       data-group="comment" class="input group_field" value="{{$item_comment->name_field}}"
                       data-item-id="{{$item_comment->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_rollback"
                       data-group="comment" class="input group_pre_field" value="{{$item_comment->slug_field}}"
                       data-item-id="{{$item_comment->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="prof" data-block="dom_rollback"
                       data-group="comment" class="input group_field" value="{{$item_comment->prof_field}}"
                       data-item-id="{{$item_comment->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="speed" data-block="dom_rollback"
                       data-group="comment" class="input group_field" value="{{$item_comment->speed_field}}"
                       data-item-id="{{$item_comment->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="comment_text" data-block="dom_rollback"
                          data-group="comment" class="input group_field" data-item-id="{{$item_comment->id_field}}"
                          placeholder="Текст">{{$item_comment->comment_text_field}}</textarea>
            </div>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="dom_rollback" data-group="comment"
                        data-entity="groupitem" data-item-id="{{$item_comment->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>@endsection