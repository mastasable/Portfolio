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
});