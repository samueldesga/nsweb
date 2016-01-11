$(window).scroll(function() {    
   setFixedNavbar();
});

$(window).resize(function(){
    setFixedNavbar();
});

function setFixedNavbar(){
    var mediaQuery = window.matchMedia( "(min-width: 781px)" );
    if(mediaQuery.matches){
        var header = $("#nav");
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            header.removeClass("clearfix").addClass("clearfix nav-fixed");
        } else {
            header.removeClass("clearfix nav-fixed").addClass("clearfix");
        }
    }
}



        
        
        
        
         