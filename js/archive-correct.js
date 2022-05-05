function load() {
  const archiveCorrect = new ArchiveCorrect();
  archiveCorrect.init();
}

function resize() {
  // const archiveCorrect = new ArchiveCorrect();
  // archiveCorrect.responsiveView();
}

function ArchiveCorrect() {}

ArchiveCorrect.prototype.init = function () {
  // this.responsiveView();
  this.addEvent();
};

// ArchiveCorrect.prototype.responsiveView = function(){
//   if(getWindowType() === WINDOW_TYPE_SP) {

//   }else{

//   }
// };

ArchiveCorrect.prototype.addEvent = function () {
  $(".p-correct__inner__list__row").on("click", function () {
    window.location.href = $(this)
      .find(".p-correct__inner__list__row__title > a")
      .eq(0)
      .attr("href");
  });
  dispPaginate();
};
