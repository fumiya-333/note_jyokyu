function load(){
  const price = new Price();
  price.init();
}

function Price() {}

Price.prototype.init = function(){
  this.addEvent();
}

Price.prototype.addEvent = function(){
  new ScrollHint('.js-scrollable', {
    suggestiveShadow: true
  });
};