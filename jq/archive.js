function load(){
  const archive = new Archive();
  archive.init();
}

function resize() {
  // const archive = new Archive();
  // archive.responsiveView();
}

function Archive() {}

Archive.prototype.init = function(){
  // this.responsiveView();
  this.addEvent();
}

// Archive.prototype.responsiveView = function(){
//   if(getWindowType() === WINDOW_TYPE_SP) {

//   }else{

//   }
// };

Archive.prototype.addEvent = function(){
  $('.blog-row').on('click', function(){
    window.location.href = $(this).find('.blog-row-title > a').eq(0).attr('href');
  });
  dispPaginate();
};