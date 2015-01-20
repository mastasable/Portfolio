/**
 * Created by nathan on 15.01.15.
 */
$(function() {
    var $container = $('#container');
    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.item',
            singleMode: true,
            isResizable: true,
            isAnimated: true,
            animationOptions: {
                queue: false,
                duration: 500
            },
            columnWidth: 205

        });
    });

    //выбрать последний проект
    $('.item').last()
        .addClass('last')
        .html('<a href="#modal" id="addproject"><span class="top"></span><span>Добавить проект</span></a>');

    //модальное окно
    //открытие модального окна
    $('a#addproject').click(function(event){
        event.preventDefault();
        $('#overlay').fadeIn(400, function(){
            $('#modal')
                .css('display', 'block')
                .animate({opacity: 1, top: '50%'}, 200);
        });
    });// конец открытия модального окна

    //закрытие модального окна
    $('#modal_close, #overlay').click(function(){
        $('#modal')
            .animate({opacity: 0, top: '50%'}, 200,
            function(){
                $(this).css('display', 'none');
                $('#overlay').fadeOut(400);
            });
    });//конец модального окна

    //имитация input[type=file]
    var wrapper = $(".file-upload"),
        inp = wrapper.find("input"),
        btn = wrapper.find("button"),
        lbl = wrapper.find("div");
    btn.focus(function(){
       inp.focus()
    });
    inp.focus(function(){
        wrapper.addClass("focus");
    }).blur(function(){
       wrapper.removeClass("focus");
    });
    btn.add(lbl).click(function(){
        inp.click();
    });
    btn.focus(function(){
        wrapper.addClass( "focus" );
    }).blur(function(){
        wrapper.removeClass( "focus" );
    });//конец имитации input[type=file]

    //заполнение поля выбора файла
    var fileApi = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;

    inp.change(function(){
        var file_name;
        if( file_api && inp[ 0 ].files[ 0 ] )
            file_name = inp[ 0 ].files[ 0 ].name;
        else
            file_name = inp.val().replace( "C:\\fakepath\\", '' );

        if( ! file_name.length )
            return;

        if( lbl.is( ":visible" ) ){
            lbl.text( file_name );
        }else
            btn.text( file_name );
    }).change();
});
