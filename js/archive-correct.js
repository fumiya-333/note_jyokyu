function load() {
  const archiveCorrect = new ArchiveCorrect();
  archiveCorrect.init();
}

function resize() {}

function ArchiveCorrect() {}

ArchiveCorrect.prototype.init = function () {
  this.addEvent();
  dispPaginate();
};

ArchiveCorrect.prototype.addEvent = function () {
  $(".p-correct__inner__list__row").on("click", function () {
    window.location.href = $(this)
      .find(".p-correct__inner__list__row__title > a")
      .eq(0)
      .attr("href");
  });
};
