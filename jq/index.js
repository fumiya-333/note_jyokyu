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

    $('#toefl-optimization-title').html('TOEFLに最適化された無駄のないカリキュラム');
    $('#toefl-teacher-title').html('日本人指導歴10年以上の経験豊富な講師陣');

    $('#doc-req-title').html('お気軽にお問い合わせください');
  }else{
    $('#toefl-study-title').html('TOEFL学習でこんな悩みありませんか？');
    $('#toefl-study-sub-title-box').html('<ul><li>勉強の習慣が<br>身についていない</li><li>勉強しているはず<br>なのに点数が伸びない</li><li>正しい勉強方法が<br>わからない</li></ul>');
    $('#toefl-study-box-text').html('完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。');

    $('#toefl-optimization-title').html('TOEFLに最適化された<br>無駄のないカリキュラム');
    $('#toefl-teacher-title').html('日本人指導歴10年以上の<br>経験豊富な講師陣');

    $('#doc-req-title').html('まずは無料で資料請求から');
  }
};

Top.prototype.addEvent = function(){
  $('.qa-accordion-row').on('click', function(){
    if($(this).hasClass('qa-accordion-row-active')) {
      $(this).removeClass('qa-accordion-row-active');
      $(this).addClass('qa-accordion-row');
    }else{
      $(this).removeClass('qa-accordion-row');
      $(this).addClass('qa-accordion-row-active');
    }
    $(this).next().fadeToggle(200);
  });
  $('#btn-more-rate-plan').on('click', function(){
    window.location.href = Constants.PRICE_URL;
  });
  $('.blog-row').on('click', function(){
    window.location.href = $(this).find('.blog-row-title > a').eq(0).attr('href');
  });
  $('.correct-date').on('click', function(){
    window.location.href = $(this).next().find('a').eq(0).attr('href');
  });
};