function load(){
  const pageRatePlun = new PageRatePlun();
  pageRatePlun.init();
}

function resize() {
  // const pageRatePlun = new PageRatePlun();
  // pageRatePlun.responsiveView();
}

function PageRatePlun() {}

PageRatePlun.prototype.init = function(){
  // this.responsiveView();
  this.addEvent();
}

// PageRatePlun.prototype.responsiveView = function(){
//   if(getWindowType() === WINDOW_TYPE_SP) {

//   }else{

//   }
// };

PageRatePlun.prototype.addEvent = function(){
  new ScrollHint('.js-scrollable', {
    suggestiveShadow: true
  });
};