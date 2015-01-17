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
    $('.item').last().addClass('last').html('<a href="#modal" id="addproject"><span class="top"></span><span>Добавить проект</span></a>');
});