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
    var bigLogo = document.getElementById("big-logo");
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        if(mediaQuery.matches){
            header.removeClass("clearfix").addClass("clearfix nav-fixed");
            bigLogo.style.padding = "110px 15px 50px 15px";
        }
        else{
            header.removeClass("clearfix nav-fixed").addClass("clearfix");
            bigLogo.style.padding = "50px 15px 50px 15px";
        }
    } else {
        header.removeClass("clearfix nav-fixed").addClass("clearfix");
        bigLogo.style.padding = "50px 15px 50px 15px";
    }
    
}



        
        
        
        
         