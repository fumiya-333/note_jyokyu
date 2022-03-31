function load(){
  const single = new Single();
  single.init();
}

function resize() {
  // const single = new Single();
  // single.responsiveView();
}

function Single() {}

Single.prototype.init = function(){
  // this.responsiveView();
  this.addEvent();
}

// Single.prototype.responsiveView = function(){
//   if(getWindowType() === WINDOW_TYPE_SP) {

//   }else{
//   }
// };

Single.prototype.addEvent = function(){
  $('.blog-pickup-row').on('click', function(){
    window.location.href = $(this).find('.blog-pickup-title > a').eq(0).attr('href');
  });
};