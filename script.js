var ind = 0;
var switchTime = 2000;
var interval = 0;
var img = 0;
var width = 0;
var borderImg = 30;
$("#carousel nav a").click(function () {
    img = document.getElementById("imgFirst");
    width = img.clientWidth + borderImg;
    ind = $(this).index("#carousel nav a");
    $("#carousel ul").animate({ "margin-left": "-" + ind * width });
    
    $("#carousel nav a").removeClass("active");
    $(this).addClass("active");
    clearInterval(interval);
    slide();
    return false;
});


function slide() {

    interval = window.setInterval(function () {
        // increase by ind 1, reset to 0 at 10
        ind = (ind + 1) % 6;
        img = document.getElementById("imgFirst");
        width = img.clientWidth + borderImg;

        $("#carousel ul").animate({ "margin-left": "-" + ind * width });
        $("#carousel nav a").removeClass("active");
        ($("#a" + ind)).addClass("active");
    }, switchTime);
}

