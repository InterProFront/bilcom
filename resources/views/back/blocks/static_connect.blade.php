@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Тайтл страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_connect"
                   class="input block_field" value="{{$static_connect->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_connect"
                   class="input block_pre_field" value="{{$static_connect->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст под заголовком
            </label>
            <input type="text" data-field-type="string" data-field-name="connect_text" data-block="static_connect"
                   class="input block_field" value="{{$static_connect->connect_text_field}}" placeholder="Строка">
        </div>

        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="static_connect" data-group="steps" data-owner-id="0">
                @foreach($static_connect->steps_group as $item_steps )
                    @include('back.blocks.groupitems.static_connect.steps')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_connect" data-group="steps" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_connect" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection