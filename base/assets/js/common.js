$(function () {
  const $header = $("header");

  function activeUnderLine() {
    const $glbNav = $(".glbNav");
    const $listItem = $glbNav.find(".item");
    const duration = 200;
    let $this = "";

    function changeLineWidth($this, value) {
      if (!$this.hasClass("current")) {
        $this
          .find(".line")
          .stop()
          .animate({ width: value + "%" }, duration);
      }
    }

    function activeLineWidth() {
      $this = $(this);
      changeLineWidth($this, 140);
    }

    function resetLineWidth() {
      changeLineWidth($this, 0);
    }

    $listItem.on({
      mouseenter: activeLineWidth,
      mouseleave: resetLineWidth,
    });
  }

  function showSpNav() {
    const $toggle = $(".toggle");
    const $nav = $header.find(".glbNav");
    const $mask = $(".mask");

    function activeSpNav() {
      if (!$nav.is(":animated")) {
        $header.toggleClass("is-active");
        $toggle.toggleClass("is-active");
        $nav.toggleClass("is-active").fadeToggle(300);
        $mask.toggleClass("is-hide");
      }
    }

    function resetShownNav() {
      const breakPoint = 767;
      let windowWidth = $(window).width();

      if (windowWidth > breakPoint) {
        $toggle.removeClass("is-active");
        $nav.removeClass("is-active").show();
        $mask.removeClass("is-hide");
      } else if (!$nav.hasClass("is-active")) {
        $nav.hide();
      }
    }

    function init() {
      $toggle.on("click", activeSpNav);
      $(window).on("resize", resetShownNav);
    }

    init();
  }

  function changeHeader() {
    let scrollPos = $(window).scrollTop();

    if (scrollPos > 30) {
      $header.addClass("is-changed");
    } else {
      $header.removeClass("is-changed");
    }
  }

  function addLoadEffects() {
    const $validate = $('a[href ^= "http://"]' + 'a[target != "_blank"]');

    function fadeOutOnLoad(e) {
      e.preventDefault();

      const $this = $(this);
      const url = $this.attr("href");

      $(".bodyInner").fadeOut(800);

      setTimeout(function () {
        location.href = url;
      }, 1000);
    }

    function fadeInOnLoad() {
      $(".bodyInner").delay(400).fadeIn(800);
    }

    function init() {
      $(window).on("load", fadeInOnLoad);
      $validate.on("click", fadeOutOnLoad);
    }

    init();
  }

  function eventSet() {
    $(window).on("scroll resize load", changeHeader);
  }

  function init() {
    activeUnderLine();
    showSpNav();
    eventSet();
    addLoadEffects();
  }

  init();
});
