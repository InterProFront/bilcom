@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="dom_tarifs"
                   class="input block_field" value="{{$dom_tarifs->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="dom_tarifs"
                   class="input block_pre_field" value="{{$dom_tarifs->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="tarif_text" data-block="dom_tarifs"
                   class="input block_field" value="{{$dom_tarifs->tarif_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="free_connect" data-block="dom_tarifs"
                   class="input block_field" value="{{$dom_tarifs->free_connect_field}}" placeholder="Строка">
        </div>

        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="dom_tarifs" data-group="tarif_adv" data-owner-id="0">
                @foreach($dom_tarifs->tarif_adv_group as $item_tarif_adv )
                    @include('back.blocks.groupitems.dom_tarifs.tarif_adv')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_tarifs" data-group="tarif_adv" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap ">
            <table>
                <thead>
                <tr>
                    <td>Название</td>
                    <td></td>
                    <td>Публикации</td>
                    <td>Сортировка</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_tarifs" data-group="tarif_category"
                       data-owner-id="0">
                @foreach($dom_tarifs->tarif_category_group as $item_tarif_category )
                    @include('back.blocks.groupitems.dom_tarifs.tarif_category')
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_tarifs" data-group="tarif_category"
                                data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="dom_tarifs" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection