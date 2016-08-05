<div class="tarif-category-block">
    <h2 class="category-name">{{$item_category->tarif_title_field}}</h2>
    <div class="subtitle-block">
        {!!$item_category->about_tarif_field !!}
    </div>


    <div class="facts">
        @foreach($item_category->tarif_fact_group as $item_fact)
            <div class="tarif-fact">
                <div class="img-wrap">
                    <img src="/images/{{$item_fact->fact_image->primary_link}}" alt="{{$item_fact->fact_image->alt}}"
                         class="fact-img">
                </div>
                <div class="text-wrap">
                    {!!$item_fact->fact_text_field!!}
                </div>
            </div>
        @endforeach
    </div>
    <?php  $i = 0; ?>
    <div class="wrap-row">
        <div class="wrap-blocks">
        <div class="block-2">
            @foreach($item_category->tarif_group as $tarif_item)
                <?php  $i++;?>
                @if($i <= 2)
                    <div class="block">
                        <div class="emitter"></div>
                        <div class="hover-block t1" data-speed="500" data-live="150">
                            <p class="tarif-name">{{$tarif_item->tarif_name_field}}
                                <span class="text">Мб/сек</span>
                            </p>
                            <p class="button-row">
                                <button class="connect" href="#connect_tarif" data-mb="{{$tarif_item->tarif_name_field}} Мб/сек">Подключить</button>
                            </p>
                        </div>
                    </div>
                @else
        </div>
        <div class="big-block">
            <div class="emitter"></div>
            <div class="hover-block bigest t1" data-speed="500" data-live="50" data-time="600">
                <p class="tarif-name">{{$tarif_item->tarif_name_field}}
                    <span class="text">Мб/сек</span>
                </p>
                <p class="button-row">
                    <button class="connect" href="#connect_tarif" data-mb="{{$tarif_item->tarif_name_field}} Мб/сек">Подключить</button>
                </p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
        <div class="right-block-wrap">
        <div class="have-a-question">
            <div class="img-wrap">
                <img src="/img/consult-girl.PNG" alt="Изображение консультанта">
            </div>
            <h4 class="mini-title">Возник вопрос?</h4>
            <p class="consult-text">Напишите консультанту или позвоните в офис по телефону 123-45-67</p>
            <button class="ask-a-question consult-button">Задать вопрос</button>
        </div>

    </div>
    </div>
</div>