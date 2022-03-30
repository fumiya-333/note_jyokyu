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

  }
};

Blog.prototype.addEvent = function(){
  $('.blog-row').on('click', function(){
    window.location.href = $(this).find('.blog-row-title > a').eq(0).attr('href');
  });
  dispPaginate();
};