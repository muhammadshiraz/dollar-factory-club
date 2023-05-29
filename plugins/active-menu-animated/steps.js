$( document ).ready(function() {    
var tabs = $('.basic-info-tab');
var selector = $('.basic-info-tab').find('a').length;
//var selector = $(".tabs").find(".selector");
var activeItem = tabs.find('.active');
var activeWidth = activeItem.innerWidth();
$(".selector").css({
  "left": activeItem.position.left + "px", 
  "width": activeWidth + "px"
});
$(".basic-info-tab").on("click","a",function(e){
  e.preventDefault();
  $('.basic-info-tab a').removeClass("active");
  $(this).addClass('active');
  var activeWidth = $(this).innerWidth();
  var itemPos = $(this).position();
  $(".selector").css({
    "left":itemPos.left + "px", 
    "width": activeWidth + "px"
  });
});
});