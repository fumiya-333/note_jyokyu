function load(){
  const index = new Index();
  index.init();
}

function resize() {
  const index = new Index();
  index.responsiveView();
}

function Index() {}

Index.prototype.init = function(){
  this.responsiveView();
  this.addEvent();
}

Index.prototype.responsiveView = function(){
  if(getWindowType() === WINDOW_TYPE_SP) {
    $('#toefl-study-title').html('TOEFL学習で<br>こんな悩みありませんか？');
    $('#toefl-study-sub-title-box').html('<ul><li>・勉強の習慣が身についていない</li><li>・勉強しているはずなのに点数が伸びない</li><li>・正しい勉強方法がわからない</li></ul>');
    $('#toefl-study-box-text').html('完全オーダーメイドで、<br>１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。');
    $('.toefl-strong-title').html('TOEFL対策に特化した<br>Engress3つの強み');

    $('#toefl-optimization-title').html('TOEFLに最適化された無駄のないカリキュラム');
    $('#toefl-teacher-title').html('日本人指導歴10年以上の経験豊富な講師陣');

    $('#doc-req-title').html('お気軽にお問い合わせください');
  }else{
    $('#toefl-study-title').html('TOEFL学習でこんな悩みありませんか？');
    $('#toefl-study-sub-title-box').html('<ul><li><p class="toefl-study-sub-title-top">勉強の習慣が</p><p>身についていない</p></li><li><p class="toefl-study-sub-title-top">勉強しているはず</p><p>なのに点数が伸びない</p></li><li><p class="toefl-study-sub-title-top">正しい勉強方法が</p><p>わからない</p></li></ul>');
    $('#toefl-study-box-text').html('完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。');
    $('.toefl-strong-title').html('TOEFL対策に特化したEngress3つの強み');

    $('#toefl-optimization-title').html('TOEFLに最適化された<br>無駄のないカリキュラム');
    $('#toefl-teacher-title').html('日本人指導歴10年以上の<br>経験豊富な講師陣');

    $('#doc-req-title').html('まずは無料で資料請求から');
  }
};

Index.prototype.addEvent = function(){
  $('.qa-accordion-row').on('click', function(){
    $(this).toggleClass('active');
    $(this).find('.toggle-btn').eq(0).toggleClass('toggle-open');
    $(this).next().fadeToggle(200);
  });
  $('#btn-more-rate-plan').on('click', function(){
    window.location.href = Constants.RATE_PLUN_URL;
  });
  $('.blog-row').on('click', function(){
    window.location.href = $(this).find('.blog-row-title > a').eq(0).attr('href');
  });
  $('.correct-date').on('click', function(){
    window.location.href = $(this).next().find('a').eq(0).attr('href');
  });
};