$(document).ready(function () {
    $("#i").hover(function () {
        $("#im").animate({
            opacity: '0.7'
        }, 80);
     $("#c").html('<h1 style="color: #2c3e50;position: relative;bottom:150px;font-size: 100px; font-weight: 600;" class="fa fa-5x">شركه سينيارالخليج  </h1>');   
    }).mouseleave(function () {
        $("#im").animate({
            opacity: '1' 
        }, 80);
             $("#c").html("");   

    });
    $(".r img").slideDown(700).hover(function () {
        $(this).animate({
            opacity: '0.7',
            height: '220px',
            width: '290px'

        }, 80);
    }).mouseleave(function () {
        $(this).animate({
            opacity: '1',
            height: '220px',
            width: '220px'
        }, 80);
    });

});

