window.onload = function(){
  
  const WINDOW_TYPE_SP = 0;
  const WINDOW_TYPE_TB = 1;
  const WINDOW_TYPE_PC = 2;

  init();

  function init() {
    addEvent();
  }

  function addEvent() {
    $('.qa-accordion-row-passive').on("click",function(){
      if($(this).hasClass('qa-accordion-row-passive')) {
        $(this).removeClass('qa-accordion-row-passive');
        $(this).addClass('qa-accordion-row-active');
      }else{
        $(this).addClass('qa-accordion-row-passive');
        $(this).removeClass('qa-accordion-row-active');
      }
      $(this).next().fadeToggle(200);
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
};