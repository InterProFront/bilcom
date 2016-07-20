@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Тайтл страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_main_page"
                   class="input block_field" value="{{$static_main_page->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Подзаголовок «Безлимитный интернет в офис в Алматы»
            </label>
            <input type="text" data-field-type="string" data-field-name="unlimit_text" data-block="static_main_page"
                   class="input block_field" value="{{$static_main_page->unlimit_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Подзаголовок «Безлимитные тарифы»
            </label>
            <input type="text" data-field-type="string" data-field-name="sales_text" data-block="static_main_page"
                   class="input block_field" value="{{$static_main_page->sales_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Подзаголовок «Скорость не падает »
            </label>
            <input type="text" data-field-type="string" data-field-name="speed_text" data-block="static_main_page"
                   class="input block_field" value="{{$static_main_page->speed_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Подзаголовок «Индивидуальный тариф »
            </label>
            <input type="text" data-field-type="string" data-field-name="individual_text" data-block="static_main_page"
                   class="input block_field" value="{{$static_main_page->individual_text_field}}" placeholder="Строка">
        </div>

        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="static_main_page" data-group="advantage"
                data-owner-id="0">
                @foreach($static_main_page->advantage_group as $item_advantage )
                    @include('back.blocks.groupitems.static_main_page.advantage')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_main_page" data-group="advantage"
                    data-descr="Эл. первой группы" data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_main_page" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection