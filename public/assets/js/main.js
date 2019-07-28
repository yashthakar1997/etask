//========================================================================
    //INDEX PAGE STARTS HERE
//========================================================================
$(function(){
  $('.nav li').click(function(){
    $(this).parent().addClass('active').siblings().removeClass('active')	
  })
});

$(".full-width").addClass('z-depth-5');
$(".main").hide();
  
document.addEventListener("DOMContentLoaded", function(){
  $('.preloader-background').delay(1700).fadeOut('slow');
  
  $('.preloader-wrapper')
    .delay(1700)
    .fadeOut();
});

$(function() {
        $( 'ul.nav li' ).on( 'click', function() {
              $( this ).parent().find( 'li.active' ).removeClass( 'active' );
              $( this ).addClass( 'active' );
        });
  });

$( document ).ready(function(){

  $(".main").show();
  $(".button-collapse").sideNav();
  $('.carousel.carousel-slider').carousel({fullWidth: true});
  $('.parallax').parallax();
  $('.modal').modal();
  $('.scrollspy').scrollSpy();

  //window.setInterval(function(){
    //        $(".carousel-item").carousel('next').delay(4000);
  // }, 5000);

})

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 300) {
        $(".nav-wrapper").addClass("z-depth-5");
    } else {
        $(".nav-wrapper").removeClass("z-depth-5");
    }

    if (scroll >= 700) {
      $(".promo-example").addClass("animated flipInX");
    } else {
        $(".promo-example").removeClass("animated flipInX");
    }
    
});

$(document).ready(function(){ 
  $('.registration_modal').modal();
});

$(document).ready(function() {
  $('select.reg_select').material_select();
});

$(document).ready(function(){
  $('#reg_close_btn').click(function(){
    $('.registration_modal').modal('close');
  })
});

$(document).ready(function(){
  $('.slider').slider();
});


//========================================================================
    //PROFILE PAGE STARTS HERE
//========================================================================

//right side navigation initialization
$(document).ready(function(){
$(".nav-collapse-btn").sideNav({
    edge: ""
});

//left side nav initialization
$(".button-collapse.left-side-nav").sideNav();

//left side user section dropdown
$(".side-nav-up-data.dropdown-trigger").dropdown();

//complain description model
$('.modal').modal();
});


//========================================================================
    //ADMIN PROFILE PAGE STARTS HERE
//========================================================================

$(document).ready(function() {
  $('select').material_select();
});

$(document).ready(function(){
  $('.tooltipped').tooltip({delay: 50});
});


//========================================================================
    //FOR TABINATION
//========================================================================


$(document).ready(function(){
  $('ul.tabs').tabs();
});
    