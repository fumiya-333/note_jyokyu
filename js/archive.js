function load() {
  const archive = new Archive();
  archive.init();
}

function resize() {}

function Archive() {}

Archive.prototype.init = function () {
  this.addEvent();
  dispPaginate();
};

Archive.prototype.addEvent = function () {
  $(".p-blog__inner__contents__list__row").on("click", function () {
    window.location.href = $(this)
      .find(".p-blog__inner__contents__list__row__wrapper__title > a")
      .eq(0)
      .attr("href");
  });
};
