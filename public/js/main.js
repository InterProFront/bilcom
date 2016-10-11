var map;
var geocoder;
function initMap() {
    map = new google.maps.Map(document.getElementById('map_cart'), {
        center: {lat: 43.257487, lng: 76.9392692},
        zoom: 14
    });
    geocoder = new google.maps.Geocoder();

}
$(document).ready(function () {

    $(window).on('load resize',function(){
        if (($(window).width() <= '900') && ($(window).width() >= '720')) {

            $('header .connect').appendTo($('header .inf-block'));

        } else {

            $('header .connect').appendTo($('header .connect-item'));

        }
    });


    $('.step-item').each(function (i) {
        if (i == 1) {
            $(this).animate({right: 0}, 3000, 'easeInOutElastic', function () {
            });
        } else {
            $(this).animate({left: 0}, 3000, 'easeInOutElastic', function () {
            });
        }
    });
   // ======================
   //$('.plus-item .wrap img').each( function(k, v) {
   //    var el = this;
   //    setTimeout(function () {
   //        $(el).addClass('animated');
   //        //$(el).find('.plus-text').css({opacity: 1});
   //    }, k*500);
   //});
    setTimeout(function(){
        $('.plus-item.first .wrap img').addClass('animated');
        $('.plus-item.first  .plus-text').addClass('animated');
    },250);
    setTimeout(function(){
        $('.plus-item.second .wrap img').addClass('animated');
        $('.plus-item.second .plus-text').addClass('animated');
    },500);
    setTimeout(function(){
        $('.plus-item.last .wrap img').addClass('animated');
        $('.plus-item.last .plus-text').addClass('animated');
    },750);
    setTimeout(function(){$('.unlimite-int .sub-title .orange').addClass('active');}, 1500);
   //=========================
    $('.map-button').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {

            open: function () {
                google.maps.event.trigger(map, 'resize');
                map.addListener('click', function (event) {
                    geocoder.geocode({'latLng': event.latLng}, function (result, status) {
                        //alert(result[0].formatted_address)
                        $('.popup_field[data-field-name="address"]').val(result[0].formatted_address).attr('title', result[0].formatted_address);
                        $.magnificPopup.close();
                    });
                });

            }
        }
    });

    $('.consult-button').on('click', function (e) {
        // Открываем чат и фокусируем поле ввода
        e.preventDefault();
        Chatra('show', true);
        Chatra('openChat', true);
    });
    //элемент не на экране


    $('.connect .link').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });
    $('button.connect').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {
            close: function () {
            }
        }
    }).on('click', function () {
        $('#connect_tarif .popup_field[data-field-name="speed"]').val($(this).data('mb'));
    });

    $('.main-menu .menu-item a').each(function () {
        if ($(this).attr('href') == window.location.pathname) {
            $(this).parent().addClass('active');
        }
    });
    $('.menu-button').on('click', function () {
        if ($(this).hasClass('clicked')) {
            $(this).removeClass('clicked');
        } else {
            $(this).addClass('clicked');
        }
        $('.popup-menu').slideToggle();
    });


    var timer;
    var $emitter;
    var emitEvery = 200;
    var removeAfter = 1000;
    var speed;
//execute first particle creation
    $('.hover-block').hover(
        function () {
            $emitter = $(this).prev('.emitter');
            emitEvery = $(this).data('live');
            removeAfter = $(this).data('time') || 1000;
            speed = $(this).data('speed');
            if ($(this).hasClass('bigest')) {
                height = 190;
            } else {
                height = 190;
            }
            create();
        },
        function () {
            window.clearTimeout(timer);
        }
    );
    function create() {

        //create particle and random values
        var $particle = $('<div class="particle" />'),
            x = Math.randMinMax(300, speed),
            y = Math.randMinMax(20, height),
            z = 0,
            color = '#379d47';

        //append particle to dom
        $particle.css('background', color);
        $emitter.append($particle);

        //after a short timeout, set css to be transitioned to. Without the timeout, we would not see the transition
        window.setTimeout(function () {
            $particle.css({
                transform: ' translateX(' + -x + 'px)',
                opacity: 0,
                top: y
            });
        }, 50);

        //remove current particle after time
        window.setTimeout(function () {
            $particle.remove();
        }, removeAfter);

        timer = window.setTimeout(create, emitEvery);
    }

//https://gist.github.com/timohausmann/4997906
    Math.randMinMax = function (t, n, a) {
        var r = t + Math.random() * (n - t)
        return a && (r = Math.round(r)), r
    }

    $('.send-form').hover(
        function () {
            $('.cable').css('width', '55px');
        },
        function () {
            $('.cable').css('width', '2px');
        }
    );
    $('.connect-item').hover(
        function () {
            $('.cable-right').css('width', '50px');
        },
        function () {
            $('.cable-right').css('width', '5px');
        }
    ).on('click', function () {
        $('.application-block').slideToggle();
        setTimeout(function () {
            window.scrollTo(0, $('.application-block').offset().top);
        }, 500);
    });

    $(window).on('scroll', function () {
        $pc = $('.pc-ic');
        $media = $('.media-ic');
        $docs = $('.docs-ic');
        $play = $('.play-ic');
        var top = $('.application h3.title').offset().top;
        if ((top - 450) <= $(this).scrollTop()) {
            $pc.css({
                transform: ' translateX(' + -420 + 'px) translateY(' + -173 + 'px)'
            });
            $media.css({
                transform: ' translateX(' + 420 + 'px) translateY(' + -173 + 'px)'
            });
            $docs.css({
                transform: ' translateX(' + -320 + 'px) translateY(' + 160 + 'px)'
            });
            $play.css({
                transform: ' translateX(' + 340 + 'px) translateY(' + 210 + 'px)'
            });
        } else {
            $pc.css({
                transform: ' translateX(' + 0 + 'px) translateY(' + 0 + 'px)'
            });
            $media.css({
                transform: ' translateX(' + 0 + 'px) translateY(' + 0 + 'px)'
            });
            $docs.css({
                transform: ' translateX(' + 0 + 'px) translateY(' + 0 + 'px)'
            });
            $play.css({
                transform: ' translateX(' + 0 + 'px) translateY(' + 0 + 'px)'
            });
        }
    });
});
