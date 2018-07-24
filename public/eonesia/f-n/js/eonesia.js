
$(function() {
    var header = $(".transparentBG");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            header.addClass("transparentBG animated slideInDown hoverable navbar");
        } else {
            header.removeClass("animated slideInDown navbar");
        }
    });
});
$(document).ready(function() {
    $(".event").click(function() {
        $(".event-card").addClass("animated fadeInUp");
    });
    $(".contact").click(function() {
        $(".contact-bawah").addClass("animated fadeInUp");
    });
    $(".patner").click(function() {
        $(".patner-bawah").addClass("animated fadeInUp");
    });

    $('.parallax').parallax();
     $('.carousel').carousel();
     $('.modal').modal();
     $('.datepicker').datepicker();
     $(".preloader-wrapper").fadeOut();
     $('select').formSelect();
});
$(window).load(function() {
    $(".loader").delay(10).fadeOut();
});


