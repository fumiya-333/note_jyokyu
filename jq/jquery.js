const WINDOW_TYPE_SP = 0;
const WINDOW_TYPE_TB = 1;
const WINDOW_TYPE_PC = 2;

const WINDOW_SIZE_SP = 768;
const WINDOW_SIZE_TB = 1025;

window.onload = function(){
  $('#btn-hamburger').on('click', function(){
    $('#nav').css('display', $('#btn-hamburger, #btn-hamburger-line').hasClass('open') ? 'none' : 'block');
    $('#btn-hamburger, #btn-hamburger-line').toggleClass('open');
  });

  if(load){
    load();
  }
};

$(window).on('resize', function(){
  if(resize){
    resize();
  }
});

function getWindowType(){
  if($(window).innerWidth() < WINDOW_SIZE_SP){
    // スマートフォン
    return WINDOW_TYPE_SP;
  }else if($(window).innerWidth() < WINDOW_SIZE_TB){
    // タブレット
    return WINDOW_TYPE_TB;
  }else{
    // PC
    return WINDOW_TYPE_PC;
  }
}