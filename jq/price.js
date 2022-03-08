function load(){
  const price = new Price();
  price.init();
}

function resize() {
  const price = new Price();
  price.responsiveView();
}

function Price() {}

Price.prototype.init = function(){
  this.responsiveView();
  this.addEvent();
}

Price.prototype.responsiveView = function(){
  if(getWindowType() === WINDOW_TYPE_SP) {

  }else{

  }
};

Price.prototype.addEvent = function(){
  new ScrollHint('.js-scrollable', {
    suggestiveShadow: true
  });
};