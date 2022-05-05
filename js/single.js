function load() {
  const single = new Single();
  single.init();
}

function resize() {
  // const single = new Single();
  // single.responsiveView();
}

function Single() {}

Single.prototype.init = function () {
  // this.responsiveView();
  this.addEvent();
};

// Single.prototype.responsiveView = function(){
//   if(getWindowType() === WINDOW_TYPE_SP) {

//   }else{
//   }
// };

Single.prototype.addEvent = function () {
  $(".p-article-pickup__inner__list__row").on("click", function () {
    window.location.href = $(this)
      .find(".p-article-pickup__inner__list__row__wrapper__title > a")
      .eq(0)
      .attr("href");
  });
};
