function load() {
  const archive = new Archive();
  archive.init();
}

function resize() {
  // const archive = new Archive();
  // archive.responsiveView();
}

function Archive() {}

Archive.prototype.init = function () {
  // this.responsiveView();
  this.addEvent();
  dispPaginate();
};

// Archive.prototype.responsiveView = function(){
//   if(getWindowType() === WINDOW_TYPE_SP) {

//   }else{

//   }
// };

Archive.prototype.addEvent = function () {
  $(".p-blog__inner__contents__list__row").on("click", function () {
    window.location.href = $(this)
      .find(".p-blog__inner__contents__list__row__wrapper__title > a")
      .eq(0)
      .attr("href");
  });
};
