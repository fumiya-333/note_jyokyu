function load(){
  const top = new Top();
  top.init();
}

function resize() {
  const top = new Top();
  top.responsiveView();
}

function Top() {}

Top.prototype.init = function(){
  this.responsiveView();
  this.addEvent();
}

Top.prototype.responsiveView = function(){
  if(getWindowType() === WINDOW_TYPE_SP) {
    $('#toefl-study-title').html('TOEFL学習で<br>こんな悩みありませんか？');
    $('#toefl-study-sub-title-box').html('<ul><li>・勉強の習慣が身についていない</li><li>・勉強しているはずなのに点数が伸びない</li><li>・正しい勉強方法がわからない</li></ul>');
    $('#toefl-study-box-text').html('完全オーダーメイドで、<br>１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。');
  }else{
    $('#toefl-study-title').html('TOEFL学習でこんな悩みありませんか？');
    $('#toefl-study-sub-title-box').html('<ul><li>勉強の習慣が<br>身についていない</li><li>勉強しているはず<br>なのに点数が伸びない</li><li>正しい勉強方法が<br>わからない</li></ul>');
    $('#toefl-study-box-text').html('完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。');
  }
};

Top.prototype.addEvent = function(){
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
};