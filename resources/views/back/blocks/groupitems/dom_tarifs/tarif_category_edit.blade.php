@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_tarif_category->id_field}}">
        <div class="block ">
            <ul class="group-block group_container" data-block="dom_tarifs" data-group="tarif_category"
                data-owner-id="{{$item_tarif_category->id_field}}">
                @foreach($item_tarif_category->tarif_group as $item_tarif )
                    @include('back.blocks.groupitems.dom_tarifs.tarif')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_tarifs" data-group="tarif" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_tarif_category->id_field}}"> Добавить
            </button>
            <ul class="group-block group_container" data-block="dom_tarifs" data-group="tarif_category"
                data-owner-id="{{$item_tarif_category->id_field}}">
                @foreach($item_tarif_category->tarif_fact_group as $item_tarif_fact )
                    @include('back.blocks.groupitems.dom_tarifs.tarif_fact')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_tarifs" data-group="tarif_fact" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_tarif_category->id_field}}"> Добавить
            </button>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="about_tarif" data-block="dom_tarifs"
                          data-group="tarif_category" class="input group_field"
                          data-item-id="{{$item_tarif_category->id_field}}"
                          placeholder="Текст">{{$item_tarif_category->about_tarif_field}}</textarea>
            </div>
            <ul class="group-block group_container" data-block="dom_tarifs" data-group="tarif_category"
                data-owner-id="{{$item_tarif_category->id_field}}">
                @foreach($item_tarif_category->tarif_group as $item_tarif )
                    @include('back.blocks.groupitems.dom_tarifs.tarif')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_tarifs" data-group="tarif" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_tarif_category->id_field}}"> Добавить
            </button>
            <ul class="group-block group_container" data-block="dom_tarifs" data-group="tarif_category"
                data-owner-id="{{$item_tarif_category->id_field}}">
                @foreach($item_tarif_category->tarif_fact_group as $item_tarif_fact )
                    @include('back.blocks.groupitems.dom_tarifs.tarif_fact')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_tarifs" data-group="tarif_fact" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_tarif_category->id_field}}"> Добавить
            </button>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="dom_tarifs" data-group="tarif_category"
                        data-entity="groupitem" data-item-id="{{$item_tarif_category->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>@endsection