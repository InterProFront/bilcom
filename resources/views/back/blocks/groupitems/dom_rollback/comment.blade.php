<tr data-sorter="{{$item_comment->sorter_field}}" data-id="{{$item_comment->id_field}}">
    <td><a href="">{{$item_comment->name_field}}</a></td>
    <td></td>
    <td>
        <select class="publicated">
            @if( $item_comment->show_field)
                <option value="true" selected> Опубликовано</option>
                <option value="false">Не опубликовано</option>
            @else
                <option value="true"> Опубликовано</option>
                <option value="false" selected>Не опубликовано</option>
            @endif
        </select>
    </td>
    <td>
        <div class="sort_buttons">
            <div class="up-button"></div>
            <div class="down-button"></div>
        </div>
    </td>
    <td><a href="/adm/edit/comment/{{$item_comment->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_rollback" data-group="comment" data-entity="groupitem"
                data-item-id="{{$item_comment->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
