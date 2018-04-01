$(document).ready(function(){
    $(".more").hover(function(){
        $(this).css("background-color", "#2196F3");
        }, function(){
        $(this).css("background-color", "#fff");
    });
    $(".addCart").hover(function(){
        $(this).css("background-color", "#e41010");
        }, function(){
        $(this).css("background-color", "#fff");
    });
});