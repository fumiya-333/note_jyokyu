$(function(){
  
  const SCROLL_TOP_RECT = 100;
  const WINDOW_TYPE_SP = 0;
  const WINDOW_TYPE_TB = 1;
  const WINDOW_TYPE_PC = 2;

  init();

  function init() {
    addEvent();
    scrollTop();
  }

  function addEvent() {
    $('#hamburger').on('click', function(){
      $('#nav').css('display', $('#hamburger').hasClass('hamburger-open') ? 'none' : 'block');
      $('#hamburger').toggleClass('hamburger-open');
    });
  }

  function isWindowType(){
    const ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)) {
        // スマートフォン
        return WINDOW_TYPE_SP;
    } else if (ua.indexOf('iPad') > -1 || ua.indexOf('Android') > -1) {
        // タブレット
        return WINDOW_TYPE_TB;
    } else {
        // PC
        return WINDOW_TYPE_PC;
    }
  }

  function scrollTop(){
    $(window).scroll(function(){
      if($(this).scrollTop() > SCROLL_TOP_RECT){
        if(isWindowType() !== WINDOW_TYPE_SP){
          $('#page-top').show();
        }
        $('#header').css('background-color', '#21054D');
      }else{
        $('#page-top').hide();
        $('#header').css('background-color', '');
      }
    });
    $('#page-top').on('click', function(){
      $('body,html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  }
});