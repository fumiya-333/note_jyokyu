const WINDOW_TYPE_SP = 0;
const WINDOW_TYPE_TAB = 1;
const WINDOW_TYPE_PC = 2;

const WINDOW_SIZE_SP = 768;
const WINDOW_SIZE_TAB = 1025;

window.onload = function(){
  $('#btn-hamburger').on('click', function(){
    $('#nav').css('display', $('#btn-hamburger, #btn-hamburger-line').hasClass('open') ? 'none' : 'block');
    $('#btn-hamburger, #btn-hamburger-line').toggleClass('open');
  });

  if(typeof load == 'function'){
    load();
  }
};

$(window).on('resize', function(){
  if(resize){
    resize();
  }
});

function getWindowType(){
  if($(window).outerWidth() < WINDOW_SIZE_SP){
    // スマートフォン
    return WINDOW_TYPE_SP;
  }else if($(window).outerWidth() < WINDOW_SIZE_TAB){
    // タブレット
    return WINDOW_TYPE_TAB;
  }else{
    // PC
    return WINDOW_TYPE_PC;
  }
}