/**
 * Created by KocaHocTpa on 29.02.2016.
 */
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function  validate(arr){
        var error = false;
        arr.each(function(){
            $this = $(this);
           if ($this.val() == ''){
                error = true;
               $this.addClass('error');
               $this.on('change',function(){
                   $(this).removeClass('error');
               })
           }
           if ($this.data('field-name') == 'email' || $this.data('field-name') == 'mail'){
               regex = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
               if (!regex.test($this.val())){
                   error = true;
                   $this.addClass('error');
                   $this.on('change',function(){
                       $(this).removeClass('error');
                   })
               }
           }
        });
        return error;
    }
    function clear_field(id){
        $('#'+id+' .popup_field').each(function(){
           $(this).val('');
        });
    }
    $('.send-ask').on('click',function() {
        unical = $(this).data('popup-id');


        var validater = validate( $('#'+unical+' .popup_field'));

        var dataobj = {};
        dataobj['block'] = 'fidback';
        dataobj['type_name'] = $(this).data('type-name');
        dataobj['stringfields'] = {};
        dataobj['textfields'] = {};
        dataobj['bools'] = {};
        dataobj['numbs'] = {};
        dataobj['images'] = {};

        var add_fields = function (selector, obj) {
            $(selector).each(function () {
                var $this = $(this);

                var field_type = $this.data('field-type');
                var field_name = $this.data('field-name');

                if (field_type == 'bool') {
                    obj['bools'][field_name] = $this.is(':checked');

                } else if (field_type == 'text') {
                    obj['textfields'][field_name] = $this.val();

                } else if (field_type == 'string') {
                    obj['stringfields'][field_name] = $this.val();

                } else if (field_type == 'numb') {
                    obj['numbs'][field_name] = $this.val();
                }
            });
        };
        add_fields(
            '#'+unical+' .popup_field',
            dataobj);

        if(!validater){

            var deferred = $.ajax(
                {
                    type: 'POST',
                    url: '/fidback/sendform',
                    dataType: 'json',
                    data: dataobj
                }
            );
            deferred.done(function(data){
                $.magnificPopup.open({
                    items: {
                        src: '#thanks'
                    },
                    type: 'inline'
                });
                clear_field(unical);
            });
            deferred.fail(function(data){

            })
        }else{
            if( unical == 'quest'){
                $('#'+unical+' .public').text('Не все поля заполнены верно');
            }else{
                $('#'+unical+' .text').text('Не все поля заполнены верно');
            }
        }


    });

});