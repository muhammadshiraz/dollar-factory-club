$( document ).ready(function() {    
  var tabs = $('.basic-info-tab');
  var selector = $('.basic-info-tab').find('a').length;
  var activeItem = tabs.find('.active');
  var activeWidth = activeItem.innerWidth();
  $(".selector").css({
    "left": activeItem.position.left + "px", 
    "width": activeWidth + "px"
  });

  $(".basic-info-tab").on("click","a",function(e) {
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
  
  $('.tab-content').hide();
  $('.tab-content:first').show();

  // Click function
  $('#create-account-nav li a').click(function(){
    $('#create-account-nav li a').removeClass('active font-semibold');
    $(this).addClass('active font-semibold');
    $('.tab-content').hide();
    var activeTab = $(this).attr('href');
    $(activeTab).fadeIn();
    return false;
  });
});