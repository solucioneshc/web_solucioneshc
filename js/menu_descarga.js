$(document).ready(function(){

    $('.botones #inicio').addClass('a_activado');

    $('.menu').on('click',function(){

        $('.menu').removeClass('a_activado');
        $(this).addClass('a_activado');
    
    
    });



});