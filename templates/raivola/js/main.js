$(function () {

    $wiki = $(window).width();

    if ( $wiki >= 500 ){
        $('.section-title').textillate({
            in: {
                delayScale: .4,
                delay: 40
            },
            out: {
                effect: 'fadeOutRight',
                delayScale: 0.4,
                delay: 30
            }
        });
    }
})  

$(document).ready(function(){



            $('#fullpage').fullpage({
        navigation: true,
        navigationPosition: 'left',
        touchSensitivity: 5,

        css3: false,

        onLeave: function(index, nextIndex, direction){
            var colors = ['#a40045','#E54312','#E36C1A', '#4B7C71', '#192C32' ,'#115f9a', '#89b92d'];
            var maxSection = $('.section').length;

            
            if(nextIndex !== 1){
                $('.logo').addClass('nomain');
                    $('#fp-nav').show(300)
                    $('.menu').show(300)
            } else{
                $('.logo').removeClass('nomain');
                    $('#fp-nav').hide(300)
                    $('.menu').hide(500)
            }
            $('.menu').css('background-color', colors[nextIndex -1]);    
        
            $wiwi = $(window).width();
          //  if ( $wiwi >= 500 ){

                if ( index == 1 && nextIndex == maxSection){
                     $('.arrow').css('border-right-color', colors[nextIndex - 1]);
                    $('.menu').css('background-color', colors[nextIndex - 1]);
                    $('#page-1').find('.color-tab').css('background-color', colors[nextIndex - 1]);
                    $('#page-' + nextIndex).find('.color-tab').css('background-color', colors[nextIndex - 1]);
                } 

                if ( direction == 'down'){
                    if ( $('#page-' + index).hasClass('active') ){
                        $(this).find('.color-tab').css('background-color', colors[nextIndex - 1]);
                        $('#page-' + nextIndex).find('.color-tab').css('background-color', colors[nextIndex - 1]);
                        $(this).find('.section-title').textillate('out');
                        $('#page-' + nextIndex).find('.section-title').textillate('start');
                             $('.arrow').css('border-right-color', colors[nextIndex - 1]);
                    $('.menu').css('background-color', colors[nextIndex - 1]);

                    } 

                } else if ( direction == 'up'){
                    if ( $('#page-' + index).hasClass('active') && $('#page-' + index != '#page-1') ){
                        $(this).find('.color-tab').css('background-color', colors[nextIndex - 1]);
                        $('#page-' + nextIndex).find('.color-tab').css('background-color', colors[nextIndex - 1]);
                        $(this).find('.section-title').textillate('out');
                        $('#page-' + nextIndex).find('.section-title').textillate('start');
                             $('.arrow').css('border-right-color', colors[nextIndex - 1]);
                    $('.menu').css('background-color', colors[nextIndex - 1]);

                    } 
                }

           // }
        },
    });

    var projectNames = [ 'Главная', 'Корпоративным клиентам', 'Отель', 'Торжественные мероприятия', 'Детям']
    
    $('#fp-nav li').each(function(index){
        $(this).find('a').append('<h6>' + projectNames[index] + '</h6>');
    });
})