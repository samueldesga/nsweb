$(document).ready(function() {
    removeNavFixed();
    
    $(".e-box").on("click", function(){
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
	var frameId = $(this).attr("data-frameid"); 
	$("#"+frameId).siblings().addClass("hidden");
        $("#"+frameId).removeClass("hidden");
    });
});

$(window).scroll(function() {    
   setFixedNavbar();
});

$(window).resize(function(){
    setFixedNavbar();
});

function removeNavFixed(){
    var header = $("#nav");
    header.removeClass("nav-fixed");
}
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




        
        
        
        
         