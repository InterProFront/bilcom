@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Заголвоок
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_about_company"
                   class="input block_pre_field" value="{{$static_about_company->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Тайтл страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_about_company"
                   class="input block_field" value="{{$static_about_company->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Титульное изображение
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="head" data-field-type="image"
                               data-block="static_about_company" value="{{$static_about_company->head_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="head" data-field-type="image"
                               data-block="static_about_company"
                               value="{{$static_about_company->head_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image"
                               data-block="static_about_company"
                               value="{{$static_about_company->head_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image"
                               data-block="static_about_company"
                               value="{{$static_about_company->head_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image"
                               data-block="static_about_company"
                               value="{{$static_about_company->head_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image"
                               data-block="static_about_company"
                               value="{{$static_about_company->head_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_about_company->head_image->preview_link}}" class="preview"
                             data-field-name="head" data-block="static_about_company">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_about_company->head_image->alt}}" data-field-name="head"
                               data-block="static_about_company">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="head" data-field-type="image" data-block="static_about_company">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="field-wrap ">
            <label class="input-file">
                О компании
            </label>
            <textarea data-field-type="text" data-field-name="about_company" data-block="static_about_company"
                      class="input block_field"
                      placeholder="Текст">{{$static_about_company->about_company_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст справа
            </label>
            <textarea data-field-type="text" data-field-name="right_text" data-block="static_about_company"
                      class="input block_field"
                      placeholder="Текст">{{$static_about_company->right_text_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст "Онлайн консультанта"
            </label>
            <textarea data-field-type="text" data-field-name="consult_text" data-block="static_about_company"
                      class="input block_field"
                      placeholder="Текст">{{$static_about_company->consult_text_field}}</textarea>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_about_company" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection