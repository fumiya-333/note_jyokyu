function load() {
  const single = new Single();
  single.init();
}

function resize() {}

function Single() {}

Single.prototype.init = function () {
  this.addEvent();
};

Single.prototype.addEvent = function () {
  $(".p-article-pickup__inner__list__row").on("click", function () {
    window.location.href = $(this)
      .find(".p-article-pickup__inner__list__row__wrapper__title > a")
      .eq(0)
      .attr("href");
  });
};
