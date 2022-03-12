function load(){
  const blog = new Blog();
  blog.init();
}

function resize() {
  const blog = new Blog();
  blog.responsiveView();
}

function Blog() {}

Blog.prototype.init = function(){
  this.responsiveView();
  this.addEvent();
}

Blog.prototype.responsiveView = function(){
  if(getWindowType() === WINDOW_TYPE_SP) {

  }else{
    $('.page-numbers').each(function(idx, el){
      if(idx == 0){
        return true;
      }
      if($(el).hasClass('dots')){
        return true;
      }

      if(idx >= $('.page-numbers').length - 1){
        if($('.pnavi').children('.page-numbers').hasClass('dots')){
          return true;
        }
      }
      
      $(el).css('margin-left', '19px');
    });
  }
};

Blog.prototype.addEvent = function(){

};