function load() {
  const index = new Index();
  index.init();
}

function resize() {
  const index = new Index();
  index.responsiveView();
}

function Index() {}

Index.prototype.init = function () {
  this.responsiveView();
  this.addEvent();
};

Index.prototype.responsiveView = function () {
  if (getWindowType() === WINDOW_TYPE_SP) {
    $(".p-toefl-study__inner__title").html(
      "TOEFL学習で<br>こんな悩みありませんか？"
    );
    $(".p-toefl-study__inner__wrapper-top__list").html(
      '<ul><li class="p-toefl-study__inner__wrapper-top__list__row">・勉強の習慣が身についていない</li><li class="p-toefl-study__inner__wrapper-top__list__row">・勉強しているはずなのに点数が伸びない</li><li class="p-toefl-study__inner__wrapper-top__list__row">・正しい勉強方法がわからない</li></ul>'
    );
    $(".p-toefl-study__inner__wrapper-bottom__border__text").html(
      "完全オーダーメイドで、<br>１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。"
    );
    $(".p-toefl-strong__inner__title").html(
      "TOEFL対策に特化した<br>Engress3つの強み"
    );

    $(".p-toefl-strong__inner__content__row__left__title")
      .eq(0)
      .html("TOEFLに最適化された無駄のないカリキュラム");
    $(".p-toefl-strong__inner__content__row__left__title")
      .eq(1)
      .html("日本人指導歴10年以上の経験豊富な講師陣");

    $(".p-doc-req__inner__title").html("お気軽にお問い合わせください");
  } else {
    $(".p-toefl-study__inner__title").html(
      "TOEFL学習でこんな悩みありませんか？"
    );
    $(".p-toefl-study__inner__wrapper-top__list").html(
      '<li class="p-toefl-study__inner__wrapper-top__list__row"><p>勉強の習慣が</p><p>身についていない</p></li><li class="p-toefl-study__inner__wrapper-top__list__row"><p>勉強しているはず</p><p>なのに点数が伸びない</p></li><li class="p-toefl-study__inner__wrapper-top__list__row"><p>正しい勉強方法が</p><p>わからない</p></li>'
    );
    $(".p-toefl-study__inner__wrapper-bottom__border__text").html(
      "完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。"
    );
    $(".p-toefl-strong__inner__title").html(
      "TOEFL対策に特化したEngress3つの強み"
    );

    $(".p-toefl-strong__inner__content__row__left__title")
      .eq(0)
      .html("TOEFLに最適化された<br>無駄のないカリキュラム");
    $(".p-toefl-strong__inner__content__row__left__title")
      .eq(1)
      .html("日本人指導歴10年以上の<br>経験豊富な講師陣");

    $(".p-doc-req__inner__title").html("まずは無料で資料請求から");
  }
};

Index.prototype.addEvent = function () {
  $(".p-qa__inner__accordion__row").on("click", function () {
    $(this).toggleClass("active");
    $(this).find(".c-toggle-horizontal").eq(0).toggleClass("c-toggle-vertical");
    $(this).next().fadeToggle(200);
  });
  $("#p-price__inner__btn-area__btn-price").on("click", function () {
    window.location.href = Constants.PRICE_TABLE_URL;
  });
  $(".p-post__inner__blog__list__row").on("click", function () {
    window.location.href = $(this)
      .find(".p-post__inner__blog__list__row__wrapper__title > a")
      .eq(0)
      .attr("href");
  });
  $(".p-post__inner__correct__list__row__date").on("click", function () {
    window.location.href = $(this).next().find("a").eq(0).attr("href");
  });
};
