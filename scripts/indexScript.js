$(document).ready(function removeNavFixed() {
    var header = $("#nav");
    header.removeClass("nav-fixed");
});

$(window).scroll(function() {    
   setFixedNavbar();
});

$(window).resize(function(){
    setFixedNavbar();
});

function setFixedNavbar(){
    var mediaQuery = window.matchMedia( "(min-width: 781px)" );
    
    var header = $("#nav");
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        if(mediaQuery.matches){
            header.removeClass("clearfix").addClass("clearfix nav-fixed");
        }
        else{
            header.removeClass("clearfix nav-fixed").addClass("clearfix");
        }
    } else {
        header.removeClass("clearfix nav-fixed").addClass("clearfix");
    }
    
}



        
        
        
        
         