let last_scroll = $(window).scrollTop();


$(window).scroll(function() {

    let current_scroll = $(window).scrollTop();

    if (current_scroll < last_scroll) {


        if (current_scroll == 0) {
            $('#contenedor_nav').css('position', 'static');
        } else {
            $('#contenedor_nav').css('position', 'fixed');
        }


    } else {


        $('#contenedor_nav').css('position', 'static');
    }

    last_scroll = current_scroll;

    let altura_del_contenido = $('#div_home').outerHeight(true) / 3;
    if ($(window).scrollTop() >= altura_del_contenido) {

        $('#contenido').fadeIn(2500);


    } else {

        $('#contenido').fadeOut(700);


    }
});