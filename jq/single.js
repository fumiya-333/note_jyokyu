function load(){
  const single = new Single();
  single.init();
}

function resize() {
  const single = new Single();
  single.responsiveView();
}

function Single() {}

Single.prototype.init = function(){
  this.responsiveView();
  this.addEvent();
}

Single.prototype.responsiveView = function(){
  if(getWindowType() === WINDOW_TYPE_SP) {

  }else{
  }
};

Single.prototype.addEvent = function(){

};