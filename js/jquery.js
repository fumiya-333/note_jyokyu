const WINDOW_TYPE_SP = 0;
const WINDOW_TYPE_TAB = 1;
const WINDOW_TYPE_PC = 2;

const WINDOW_SIZE_SP = 768;
const WINDOW_SIZE_TAB = 1025;

window.onload = function () {
  init();
  if (typeof load == "function") {
    load();
  }
};

$(window).on("resize", function () {
  if (typeof resize == "function") {
    resize();
  }
});

function init() {
  $(".c-hamburger-btn").on("click", dispHamburger);

  $(".c-btn-doc-req, .c-btn-contact").on("click", function () {
    window.location.href = Constants.CONTACT_URL;
  });
}

function getWindowType() {
  if ($(window).outerWidth() < WINDOW_SIZE_SP) {
    // スマートフォン
    return WINDOW_TYPE_SP;
  } else if ($(window).outerWidth() < WINDOW_SIZE_TAB) {
    // タブレット
    return WINDOW_TYPE_TAB;
  } else {
    // PC
    return WINDOW_TYPE_PC;
  }
}

function dispHamburger() {
  if ($(".c-hamburger-btn, .c-hamburger-btn-line").hasClass("open")) {
    $("#nav").fadeOut();
    $(".l-main").find("a,button,input").css("pointer-events", "auto");
    $(".l-main").off("click");
    $("#l-header__inner__left__nav__list__row-last").css("display", "none");
    $("body").css("overflow", "visible");
  } else {
    $("#nav").fadeIn();
    $(".l-main").find("a,button,input").css("pointer-events", "none");
    $(".l-main").on("click", dispHamburger);
    if (getWindowType() === WINDOW_TYPE_SP) {
      $("#l-header__inner__left__nav__list__row-last").css("display", "block");
    }
    if (getWindowType() === WINDOW_TYPE_TAB) {
      $($("#nav > ul").find("li")[3]).css({
        cssText: "padding-bottom: 24px!important;",
      });
    } else {
      $($("#nav > ul").find("li")[3]).css({
        cssText: "padding-bottom: 12px!important;",
      });
    }
    $("body").css("overflow", "hidden");
  }
  $(".c-hamburger-btn, .c-hamburger-btn-line").toggleClass("open");
}

function dispPaginate() {
  if (getWindowType() !== WINDOW_TYPE_SP) {
    $(".page-numbers").each(function (idx, el) {
      if (idx == 0) {
        return true;
      }
      if ($(el).hasClass("dots")) {
        return true;
      }

      if (idx >= $(".page-numbers").length - 1) {
        if (
          $(".p-pagination .p-pnavi").children(".page-numbers").hasClass("dots")
        ) {
          return true;
        }
      }

      $(el).css("margin-left", "14px");
    });
  }
}

function dispInputError() {
  if ($("form .error").length > 0) {
    $("form .error").each(function (idx, el) {
      $(el).prev().addClass("c-input-error");
    });
  }
}
