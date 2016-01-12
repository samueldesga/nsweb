$(function() {
    var pull = $('#pull'); /* on declare une variable pull qui va aller chercher l'id pull de notre html, soit notre a avec l'id pull */
    menu = $('nav ul'); /* on declare une autre variable menu */
    menuHeight = menu.height(); /* pis une autre : menuheight, soit la hauteur de notre UL */

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function(){
        var w = $(window).width(); /*Sboutte de code la est la en cas ou on sortirais le menu, pis qu'on changerais de grandeur d'ecran, ca enleverais le style */
        if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
        }
    });
});


