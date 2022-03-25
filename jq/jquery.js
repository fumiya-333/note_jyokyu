const WINDOW_TYPE_SP = 0;
const WINDOW_TYPE_TAB = 1;
const WINDOW_TYPE_PC = 2;

const WINDOW_SIZE_SP = 768;
const WINDOW_SIZE_TAB = 1025;

window.onload = function(){
  $('main, #btn-hamburger').on('click', function(){
    if($('#btn-hamburger, #btn-hamburger-line').hasClass('open')){
      $('#nav').fadeOut();
      $('main').find('a,button,input').css('pointer-events', 'auto');
      $('#li-btn-area').css('display', 'none');
    }else{
      if($(this).is('main')) {
        return;
      }
      $('#nav').fadeIn();
      $('main').find('a,button,input').css('pointer-events', 'none');
      $('#li-btn-area').css('display', 'block');
    }
    $('#btn-hamburger, #btn-hamburger-line').toggleClass('open');
    $('body').toggleClass('el-fixed');
  });

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