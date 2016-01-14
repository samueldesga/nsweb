$(document).ready(function removeNavFixed() {
    var header = $("#nav");
    header.addClass("nav-unfixed");
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
            header.removeClass("nav-unfixed").addClass("nav-fixed");
        }
        else{
            header.removeClass("nav-unfixed");
        }
    } else {
        header.addClass("nav-unfixed");
    }
    
}



        
        
        
        
         