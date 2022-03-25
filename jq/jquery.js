const WINDOW_TYPE_SP = 0;
const WINDOW_TYPE_TAB = 1;
const WINDOW_TYPE_PC = 2;

const WINDOW_SIZE_SP = 768;
const WINDOW_SIZE_TAB = 1025;

window.onload = function(){
  $('#btn-hamburger').on('click', dispHamburger);

  $('.btn-doc-req, .btn-contact').on('click', function(){
    window.location.href = Constants.CONTACT_URL;
  });

  if(typeof load == 'function'){
    load();
  }
};

$(window).on('resize', function(){
  if(typeof resize == 'function'){
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

function dispHamburger() {
  if($('#btn-hamburger, #btn-hamburger-line').hasClass('open')){
    $('#nav').fadeOut();
    $('main').find('a,button,input').css('pointer-events', 'auto');
    $('main').off('click');
    $('#li-btn-area').css('display', 'none');
    $('body').css('overflow', 'visible');
  }else{
    $('#nav').fadeIn();
    $('main').find('a,button,input').css('pointer-events', 'none');
    $('main').on('click', dispHamburger);
    $('#li-btn-area').css('display', 'block');
    $('body').css('overflow', 'hidden');
  }
  $('#btn-hamburger, #btn-hamburger-line').toggleClass('open');
}